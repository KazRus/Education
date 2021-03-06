<?php

namespace App\Http\Controllers\Admin;

use App\Http\Helpers;
use App\Models\Actions;
use App\Models\News;
use App\Models\Faculty;
use App\Models\NewsPosition;
use App\Models\Position;
use App\Models\Rubric;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use View;
use DB;
use Auth;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
        View::share('menu', 'news');
    }

    public function index(Request $request)
    {
        $row = News::leftJoin('users','users.user_id','=','news.user_id')
                       ->orderBy('news.news_date','desc')
                       ->select('*',
                                 DB::raw('DATE_FORMAT(news.news_date,"%d.%m.%Y %H:%i") as date'));

        if(isset($request->active))
            $row->where('news.is_show',$request->active);
        else $row->where('news.is_show','1');

      
        if(isset($request->news_name) && $request->news_name != ''){
            $row->where(function($query) use ($request){
                $query->where('news_name_ru','like','%' .$request->news_name .'%');
            });
        }
        
        if(isset($request->user_name) && $request->user_name != ''){
            $row->where(function($query) use ($request){
                $query->where('name','like','%' .$request->user_name .'%');
            });
        }

        $row = $row->paginate(20);

        return  view('admin.news.news',[
            'row' => $row,
            'request' => $request
        ]);
    }

    public function create()
    {
        $row = new News();
        $row->news_image = '/media/default.jpg';

        return  view('admin.news.news-edit', [
            'title' => 'Добавить новости',
            'row' => $row
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'news_name_ru' => 'required'
        ]);

        if ($validator->fails()) {
            $messages = $validator->errors();
            $error = $messages->all();
            return  view('admin.news.news-edit', [
                'title' => 'Добавить новости',
                'row' => (object) $request->all(),
                'error' => $error[0]
            ]);
        }

        $news = new News();
        $news->news_name_ru = $request->news_name_ru;
        $news->news_desc_ru = $request->news_desc_ru;
        $news->news_text_ru = $request->news_text_ru;
        $news->news_image = $request->news_image;
        $news->user_id = Auth::user()->user_id;
        $news->news_meta_description_ru = $request->news_meta_description_ru;
        $news->news_meta_keywords_ru = $request->news_meta_keywords_ru;
        $news->is_show = 1;

        $timestamp = strtotime($request->news_date);
        $news->news_date = date("Y-m-d H:i", $timestamp);

        $news->save();


        $news->news_url_ru = '/news/'.$news->news_id.'-'.Helpers::getTranslatedSlugRu($news->news_name_ru);
        $news->news_url_kz = '/news/'.$news->news_id.'-'.Helpers::getTranslatedSlugRu($news->news_name_kz);
        $news->news_url_en = '/news/'.$news->news_id.'-'.Helpers::getTranslatedSlugRu($news->news_name_en);
        $news->save();
        
        $action = new Actions();
        $action->action_code_id = 2;
        $action->action_comment = 'news';
        $action->action_text_ru = 'добавил(а) новости "' .$news->news_name_ru .'"';
        $action->user_id = Auth::user()->user_id;
        $action->universal_id = $news->news_id;
        $action->save();
        
        return redirect('/admin/news');
    }

    public function edit($id)
    {
        $row = News::find($id);

        return  view('admin.news.news-edit', [
            'title' => 'Редактировать данные новости',
            'row' => $row
        ]);
    }

    public function show(Request $request,$id){

    }

    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'news_name_ru' => 'required',
        ]);

        if ($validator->fails()) {
            $messages = $validator->errors();
            $error = $messages->all();
            
            
            return  view('admin.news.news-edit', [
                'title' => 'Редактировать данные новости',
                'row' => (object) $request->all(),
                'error' => $error[0]
            ]);
        }

        $news = News::find($id);
        $news->news_name_ru = $request->news_name_ru;
        $news->news_desc_ru = $request->news_desc_ru;
        $news->news_text_ru = $request->news_text_ru;
        $news->news_image = $request->news_image;
        $news->news_meta_description_ru = $request->news_meta_description_ru;
        $news->news_meta_keywords_ru = $request->news_meta_keywords_ru;
        
        $timestamp = strtotime($request->news_date);
        $news->news_date = date("Y-m-d H:i", $timestamp);

        $news->news_url_ru = '/news/'.$news->news_id.'-'.Helpers::getTranslatedSlugRu($news->news_name_ru);
        $news->news_url_kz = '/news/'.$news->news_id.'-'.Helpers::getTranslatedSlugRu($news->news_name_kz);
        $news->news_url_en = '/news/'.$news->news_id.'-'.Helpers::getTranslatedSlugRu($news->news_name_en);
        $news->save();
        
        $action = new Actions();
        $action->action_code_id = 3;
        $action->action_comment = 'news';
        $action->action_text_ru = 'редактировал(а) данные новости "' .$news->news_name_ru .'"';
        $action->user_id = Auth::user()->user_id;
        $action->universal_id = $news->news_id;
        $action->save();
        
        return redirect('/admin/news');
    }

    public function destroy($id)
    {
        $news = News::find($id);

        $old_name = $news->news_name_ru;

        $news->delete();

        $action = new Actions();
        $action->action_code_id = 1;
        $action->action_comment = 'news';
        $action->action_text_ru = 'удалил(а) новости "' .$news->news_name_ru .'"';
        $action->user_id = Auth::user()->user_id;
        $action->universal_id = $id;
        $action->save();

    }

    public function changeIsShow(Request $request){
        $news = News::find($request->id);
        $news->is_show = $request->is_show;
        $news->save();

        $action = new Actions();
        $action->action_comment = 'news';

        if($request->is_show == 1){
            $action->action_text_ru = 'отметил(а) как активное - новости "' .$news->news_name_ru .'"';
            $action->action_code_id = 5;
        }
        else {
            $action->action_text_ru = 'отметил(а) как неактивное - новости "' .$news->news_name_ru .'"';
            $action->action_code_id = 4;
        }

        $action->user_id = Auth::user()->user_id;
        $action->universal_id = $news->news_id;
        $action->save();

    }
}

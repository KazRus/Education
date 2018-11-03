<?php

namespace App\Http\Controllers\Index;

use App\Http\Helpers;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Menu;
use App\Models\News;
use App\Models\Page;


use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Cookie;


class IndexController extends Controller
{
    public $lang = 'ru';

    public function __construct()
    {
        $this->lang = Helpers::getSessionLang();
    }


    public function index(Request $request)
    {
        return view('index.index');
    }

    public function showGallery(Request $request)
    {
        return view('index.gallery');
    }

    public function showContact(Request $request)
    {
        return view('index.contact');
    }

    public function showNews(Request $request)
    {
        return view('index.news.news');
    }

    public function showNewsDetail(Request $request)
    {
        return view('index.news.news-detail');
    }

    public function showFaq(Request $request)
    {
        return view('index.faq.faq');
    }

    public function showAbout(Request $request)
    {
        return view('index.about.about');
    }

    public function showcourse1(Request $request)
    {
        return view('index.course.course1');
    }
    public function showcourse2(Request $request)
    {
        return view('index.course.course2');
    }


}

<?php

namespace App\Models;

use App\Http\Helpers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class Brand extends Model
{
    protected $table = 'brand';
    protected $primaryKey = 'brand_id';

   /* use SoftDeletes;
    protected $dates = ['deleted_at'];*/
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleModel extends Model
{
    //
    protected $table = 'article';

    public static function getArticleList(){

        $condition['isDel'] = 0;
        $list = static::where($condition)->get();


        return $list;

    }
}

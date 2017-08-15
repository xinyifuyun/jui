<?php
/**
 * Created by PhpStorm.
 * User: shuru
 * Date: 2017/8/15
 * Time: 22:58
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ArticleModel;
use App\Models\LeftMenuModel;

class ArticleController extends Controller
{

    public function index()
    {
        $list = ArticleModel::getArticleList();

        $data = [
            'list' => $list
        ];

        return view('admin/article/index', $data);
    }
}

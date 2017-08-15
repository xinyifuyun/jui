<?php
/**
 * Created by PhpStorm.
 * User: shuru
 * Date: 2017/8/15
 * Time: 22:58
 */

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\LeftMenuModel;

class IndexController extends Controller
{

    public function index()
    {
        $data = [];

        return view('home/index/index', $data);
    }
}

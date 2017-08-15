<?php
/**
 * Created by PhpStorm.
 * User: shuru
 * Date: 2017/8/15
 * Time: 22:58
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LeftMenuModel;

class IndexController extends Controller
{

    public function index()
    {
        $leftMenu = LeftMenuModel::leftMenu();

        $data = [
            'level' => $leftMenu['level'],
            'leftMenu' => $leftMenu['menu'],
        ];

        return view('admin/index/index',$data);
    }
}

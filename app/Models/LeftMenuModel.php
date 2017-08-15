<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeftMenuModel extends Model
{
    //
    protected $table = 'leftmenu';


    /**
    +----------------------------------------------------------
     * 左侧导航菜单
    +----------------------------------------------------------
     */
    public static function leftMenu() {
        $condition1['pid'] = 0;
        $condition1['status'] = 1;

        $list['level'] = static::where($condition1)->select('id','level','name')->orderBy('oid','ASC')->get();

        $condition['status'] = 1;
        foreach ($list['level'] as $k => $v) {
            $condition['id'] = $v['id'];
            $condition['level'] = $v['id'];
            $list['menu'][$k] = static::where($condition)->orderBy('oid','ASC')->get();
        }
        return $list;
    }
}

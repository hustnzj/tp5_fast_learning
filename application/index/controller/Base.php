<?php
/**
 * Created by PhpStorm.
 * User: 赛道猛男之闭关修炼
 * Date: 2017/11/24
 * Time: 19:35
 */

namespace app\index\controller;

use app\index\model\User;
use think\Controller;
use think\Request;
use think\Session;


class Base extends Controller
{
    public function _initialize()
    {
        $user = User::get(Session::get('user_id'));
        Request::instance()->bind('user',$user);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: 赛道猛男之闭关修炼
 * Date: 2017/11/25
 * Time: 14:29
 */

namespace app\index\controller;

use app\index\model\User as UserModel;
use app\index\model\Profile;

class User
{
    // 关联新增数据
    public function add()
    {
        $user           = new UserModel;
        $user->name     = 'thinkphp';
        $user->password = '123456';
        $user->nickname = '流年';
        if ($user->save()) {
            // 写入关联数据
            $profile['truename'] = '刘晨'; 
            $profile['birthday'] = '1977-03-05';
            $profile['address']  = '中国上海';
            $profile['email']    = 'thinkphp@qq.com';
            $user->profile()->save($profile);
            return '用户[ ' . $user->name . ' ]新增成功';
        } else {
            return $user->getError();
        }
    }

}
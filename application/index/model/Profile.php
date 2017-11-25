<?php
/**
 * Created by PhpStorm.
 * User: 赛道猛男之闭关修炼
 * Date: 2017/11/25
 * Time: 19:22
 */

namespace app\index\model;

use think\Model;
class Profile extends Model
{
    //这里必须关闭自动时间戳，否则会认为profile表有Create_time和Update_time字段。
    protected $autoWriteTimestamp = false;

    protected $type       = [
        'birthday' => 'timestamp:Y-m-d',
    ];

    public function user()
    {
        // 档案 BELONGS TO 关联用户
        return $this->belongsTo('User');
    }
}
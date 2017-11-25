<?php
/**
 * Created by PhpStorm.
 * User: 赛道猛男之闭关修炼
 * Date: 2017/11/24
 * Time: 17:43
 */

namespace app\index\controller;


class Blog
{
    public function get($id)
    {
        return '查看id=' . $id . '的内容';
    }

    public function read($name)
    {
        return '查看name=' . $name . '的内容';
    }

    public function archive($year, $month)
    {
        return '查看' . $year . '/' . $month . '的归档内容';
    }
}
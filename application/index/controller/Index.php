<?php
namespace app\index\controller;

use think\Db;

class Index
{
    public function index()
    {
        dump(explode('.', 'post.', 2));
    }
}
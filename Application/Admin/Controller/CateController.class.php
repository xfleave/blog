<?php

namespace Admin\Controller;

use Think\Controller;

class CateController extends Controller
{
    public function lists()
    {
        $cate = D('cate');
        $this->display();
    }
}
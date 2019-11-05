<?php

namespace Admin\Controller;

use Think\Controller;

class CateController extends Controller
{
    public function add()
    {
        $cate = D('cate');
        if (IS_POST) {
            $data['cate_name'] = I('cate_name');
            if ($cate->create($data)) {
                if ($cate->add()) {
                    $this->success('新增栏目成功', 'lists');
                } else {
                    $this->error('新增栏目失败');
                }
            } else {
                $this->error($cate->getError());
            }
            return;
        }
        $this->display();

    }

}
<?php


namespace Admin\Controller;

use Think\Controller;

class FirstController extends Controller
{
    public function index()
    {
        $this->display();
    }


    public function add()
    {
        $first = D('first');//实例化数据库
        if (IS_POST) {
            $data['f_title'] = I('f_title');
            //$data['f_pic'] = I('f_pic');
            $data['f_content'] = I('f_content');
            $data['time'] = time();

            //上传图片
            if ($_FILES['f_pic']['tmp_name'] != '') {
                $upload = new \Think\Upload();//实例化上传类
                $upload->maxSize = 3145728;//设置附件上传大小
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');//设置附件上传类型
                $upload->savePath = './Uploads/';//设置附件上传(子)的目录
                $upload->rootPath = './';//设置附件上传根目录
                $info = $upload->uploadOne($_FILES['f_pic']);
                if (!info) {//上传错误提示信息
                    $this->error($upload->getError());
                } else {
                    //上传成功
                    $data['f_pic'] = $info['savepath'] . $info['savename'];//f_pic为数据库字段
                }
            }


            if ($first->create($data)) {
                if ($first->add()) {
                    $this->success('新增首页成功', U('lists'));
                } else {
                    $this->error('新增首页失败');
                }
            } else {
                $this->error($first->getError());
            }
            return;
        }
        $this->display();
    }

    public function lists()
    {
        $first = D('first');
        $firsts = $first->select();
        $this->assign('firsts', $firsts);
        $this->display();
    }

    public function del()
    {
        $first = D('first');
        if ($first->delete(I('id'))) {
            $this->success("删除成功", U('lists'));
        } else {
            $this->error('删除失败');
        }

    }
}
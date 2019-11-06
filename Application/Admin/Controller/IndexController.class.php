<?php

namespace Admin\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $this->display();
    }

    public function dologin()
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $w['u_name'] = array('eq', $username);
        $w['u_password'] = array('eq', $password);
        $logins = M("user")->where($w)->select();
        if (!$logins) {
            $this->error('用户名或密码不正确,请检查');
            return false;
        } else {
                //$_SESSION['user_a'] = $_POST['name'];//设置登录session
                //$_SESSION['admin'] = $    login['ifadmin'];//设置管理员session
                //Cookie::set('user_a',$_POST['name'],time()+3600);  之前是用cookie登录
                //Cookie::set('ifadmin',$rset['ifadmin'],time()+3600);
                //$this->assign("jumpUrl", "__APP__/Index");
                $this->success("登录成功！", U('index'));
            }
        }
}
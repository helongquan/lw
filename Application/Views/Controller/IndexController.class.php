<?php
namespace Views\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$username='Honest';
    	$email='Honest@163.com';
    	$age=200;
    	// $this->assign('username',$username);
    	// $this->assign('email',$email);

    	$user=array(
    		'user'=>$username,
    		'mail'=>$email,
    		'age'=>$age
    		);
    	$this->assign('user',$user);

    	$fetchContent=$this->fetch();
    	$fetchContent=str_replace('163', 'qq', $fetchContent);
    	$this->show($fetchContent);
    	// $this->display();
    }
}
<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        // echo "世界，你好吗？";
        $config=C('');
        dump($config);
    }
}
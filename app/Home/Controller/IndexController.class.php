<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	var_dump($_SERVER['PATH_INFO']);
		echo "hello world";
    }
    
    public function hello(){
    	echo 'hello,thinkphp!';
    }
}
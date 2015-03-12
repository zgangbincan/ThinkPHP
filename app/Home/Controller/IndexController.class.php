<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	var_dump($_SERVER['PATH_INFO']);
    	print_r($_SERVER);
		echo "hello world";
    }
    
    public function hello(){
    	echo 'hello,thinkphp!';
    }
}
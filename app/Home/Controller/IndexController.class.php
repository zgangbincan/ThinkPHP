<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	echo "path_info \n";
    	var_dump($_SERVER['PATH_INFO']);
    	echo "server: \n";
    	print_r($_SERVER);
    	echo "cookie \n";
    	print_r($_COOKIE);
		echo "env: \n";
		print_r($_ENV);
		echo "files: \n";
		print_r($_FILES);
		echo "get: \n";
		print_r($_GET);
		echo "post: \n";
		print_r($_POST);
		echo "request: \n";
		print_r($_REQUEST);
		echo "session: \n";
		print_r($_SESSION);
		echo "globals: \n";
		print_r($GLOBALS);
		echo "HTTP_ENV_VARS: \n";
		print_r($HTTP_ENV_VARS);
		echo "HTTP_GET_VARS: \n";
		print_r($HTTP_GET_VARS);
		echo "HTTP_POST_FILES";
		print_r($HTTP_POST_FILES);
		echo "HTTP_POST_VARS";
		print_r($HTTP_POST_VARS);
		echo "HTTP_SERVER_VARS";
		print_r($HTTP_SERVER_VARS);
		echo "HTTP_SESSION_VARS";
		print_r($HTTP_SESSION_VARS);
		echo "hello world";
    }
    
    public function hello(){
    	echo 'hello,thinkphp!';
    }
}
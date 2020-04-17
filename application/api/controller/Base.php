<?php
namespace app\api\controller;

class Base {
	
	public function errorReturn($message='系统错误，请稍后再试',$code=0,$data) {
		header("Access-Control-Allow-Origin: *");
        $response = compact('code', 'message', 'data');
        return json($response);
    }
  
    public function successReturn($data=null,$code=1,$message='成功') {
    	header("Access-Control-Allow-Origin: *");
        $response = compact('code', 'message', 'data');
        return json($response);
    }
    
}
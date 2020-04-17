<?php
namespace app\api\controller;

class Index extends Base
{
    public function index()
    {
        return $this->errorReturn('fail', '300', '888');
        return $this->successReturn('My name is syl.');
    }
}

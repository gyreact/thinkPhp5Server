<?php
/**
 * Created by PhpStorm.
 * User: forjadegiant
 * Date: 2019-08-05
 * Time: 22:58
 */

namespace app\buylist\controller;

use think\Controller;

class Index extends  Controller
{
    public function index(){
        return $this->fetch();
    }

    public function token(){
        return $this->fetch('token');
    }

}
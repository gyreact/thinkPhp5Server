<?php
/**
 * Created by PhpStorm.
 * User: forjadegiant
 * Date: 2019-08-05
 * Time: 20:41
 */
namespace app\token\controller;

use think\Controller;

class Index extends Controller
{
    public function index(){
        return $this->fetch();
    }

    public  function  buylist(){

        return $this->fetch('buylist');
    }





}
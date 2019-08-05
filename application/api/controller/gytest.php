<?php
/**
 * Created by PhpStorm.
 * User: forjadegiant
 * Date: 2019-07-19
 * Time: 21:21
 */
namespace  app\api\controller;
use  think\Controller;
use think\db;


class Gytest extends Controller {
    public  function  index(){

        $data = Db::table('token_buy')->whereOr('id','>=',1)->select();
        return json($data);
    }



}
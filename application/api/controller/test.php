<?php
/**
 * Created by PhpStorm.
 * User: forjadegiant
 * Date: 2019-07-16
 * Time: 22:24
 */
namespace  app\api\controller;
use app\api\model\TokenBuy;
use  think\Controller;
use think\Db;
use think\Model;

class Test extends Controller {
    public  function  index(){

        // 实例化系统数据库类
//        $DB=new Db;
//        // 查询数据
//        $user = Model('TokenBuy');
//        $user->find();
        /* select查询多条数据 find查询一条数据*/
        try {
            $data = Db::table('token_buy')->whereOr('id','>=',1)->select();

//            return show(0,"ok",json($data),201);

            return show(1,"ok",$data,201);
        } catch (\Exception $e) {
            return show(0,$e->getMessage(),"11",201);
        }

    }


    public function  update($id = 0) {
        $id = input('put.id');
        return $id;
    }

    public function save() {
        // 获取到提交数据 插入库
        $datas = $this->request->param();
        try {
            //添加数据到数据库
            Db::table('token_buy')->insert($datas);
        } catch (\Exception $e) {
            return show(0,$e->getMessage(),"11",201);
        }

        // 给客户端app  => 接口数据
        return show(1,'ok',$datas,201);

    }
}
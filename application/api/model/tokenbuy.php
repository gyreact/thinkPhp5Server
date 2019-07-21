<?php
/**
 * Created by PhpStorm.
 * User: forjadegiant
 * Date: 2019-07-16
 * Time: 23:01
 */

namespace app\api\model;
use think\model;

class tokenbuy extends  Model {

    public function add($data) {
        /*allowField 过滤无用字段*/
        $this->allowField(true)->save($data);
        return $this->BuyType;
    }

}
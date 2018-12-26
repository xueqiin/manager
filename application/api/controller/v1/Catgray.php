<?php
/**
 * Created by PhpStorm.
 * User: yun
 * Date: 2018/12/26
 * Time: 9:40
 */

namespace app\api\controller\v1;


use app\api\model\GoodsCatgray;

class Catgray
{
    //获取商品所有分类
    public function getCatgray()
    {
        $catgraise=(new GoodsCatgray())->getCatgray();
        return $catgraise;
    }
}
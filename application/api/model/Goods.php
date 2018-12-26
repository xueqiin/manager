<?php
/**
 * Created by PhpStorm.
 * User: yun
 * Date: 2018/12/26
 * Time: 9:40
 */

namespace app\api\model;


class Goods extends BaseModel
{
    //添加商品
    public function m_goods_add($data)
    {
        $result=Goods::save($data);

        if($result)
        {
            return [
                "status"=>1,
                "msg"=>"商品添加成功"
            ];
        }
        else
        {
            return [
                "status"=>400001,
                "msg"=>"商品添加失败"
            ];
        }
    }
}
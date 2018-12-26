<?php
/**
 * Created by PhpStorm.
 * User: yun
 * Date: 2018/12/26
 * Time: 9:38
 */

namespace app\api\controller\v1;


use think\Request;
use app\api\model\Goods as GoodsModel;

class Goods
{
    //添加商品
    public function goodsAdd()
    {
        $request=Request::instance();

        $param=$request->param();
        $result=(new GoodsModel())->m_goods_add($param);
        if($result["status"]==1)
        {
            return json($result);
        }

    }

    //获取商品列表
    public function getGoods()
    {

    }
}
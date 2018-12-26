<?php
/**
 * Created by PhpStorm.
 * User: yun
 * Date: 2018/12/26
 * Time: 9:41
 */

namespace app\api\model;


class GoodsCatgray extends BaseModel
{
    protected $hidden=['create_time','update_time','delete_time'];

    //商品分类
    public function getCatgray()
    {
        $catgraise=GoodsCatgray::order('id asc')->select();

        $result=self::getFixImgUrl($catgraise);
        return $result;
    }
}
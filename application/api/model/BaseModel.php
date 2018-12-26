<?php
/**
 * User: yun
 * Date: 2018/12/25
 * Time: 14:07
 * 模型基类
 */

namespace app\api\model;


use think\Model;

class BaseModel extends Model
{
    private $url="http://shop.wfdsfc.com";

    //获取图片地址
    protected function getFixImgUrl($data){
        if(is_array($data))
        {
            for($i=0;$i<count($data);$i)
            {
                $data[$i]['img_url']=$this->url.$data[$i]['img_url'];
            }
        }
        return $data;
    }
}
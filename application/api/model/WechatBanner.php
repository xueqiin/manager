<?php
/**
 * User: yun
 * Date: 2018/12/25
 * Time: 14:08
 * 返回banner相关信息，数据采用json格式
 */

namespace app\api\model;


class WechatBanner extends BaseModel
{
    protected $hidden=['sort','isshow','create_time','update_time','delete_time'];
    //获取图片信息
    public function getBanner()
    {
        $banner=WechatBanner::where('isshow','=',1)->order('sort desc')->select();

        $result=self::getFixImgUrl($banner);
        return $result;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: yun
 * Date: 2018/12/25
 * Time: 11:02
 */

namespace app\api\controller\v1;


use app\api\model\WechatBanner;

class Banner
{
    //获取小程序端banner图
    public function banner()
    {
        $banner=(new WechatBanner)->getBanner();
        return $banner;
    }
}
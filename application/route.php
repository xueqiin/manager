<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;
//小程序端

//滚动图
Route::get("getBanner","api/v1.Banner/banner");

//商品分类
Route::get("getCatgray","api/v1.Catgray/getCatgray");

//商品
Route::get("getGoods","api/v1.Goods/getGoods");

//后台端
//商品的添加
Route::post("addGoods","api/v1.Goods/goodsAdd");

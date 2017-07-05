<?php
/**
 * Created by PhpStorm.
 * User: yiyi
 * Date: 2017/7/5
 * Time: 8:22
 */

namespace app\admin\controller;


use think\Request;
use data\service\Goods as GoodsService;

class Index
{
    public function index(){
        $debug = config('app_debug') == true ? '开发者模式' : '部署模式';
        $this->assign('debug',$debug);
        $main = Request::instance()->domain();
        $this->assign('mian',$main);

        $goods_rank = $this->getGoodsRealSalesRank();
    }

    public function getGoodsRealSalesRank(){
        $goods = new GoodsService();


    }


}
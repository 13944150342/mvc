<?php
/**
 * Created by PhpStorm.
 * User: lyly
 * Date: 2016/10/10
 * Time: 20:25
 */
class testController{
    function show(){
        //控制器的作用是调用模型，并调用视图，将模型产生的数据让相关视图显示
       /* $m = new testModel();
        $data = $m->get();
        $v = new testView();
        $v->display($data);*/

        $M = M('test');
        $data = $M->get();
        $tV = V('test');
        $tV->display($data);
    }
}
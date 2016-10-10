<?php
/**
 * Created by PhpStorm.
 * User: lyly
 * Date: 2016/10/10
 * Time: 20:34
 */
/*//将三层文件引入
require_once('./libs/c/testController.class.php');
require_once('./libs/m/testModel.class.php');
require_once('./libs/v/testView.class.php');

//实例化控制器对象
$c = new testController();
$c->show();*/

//url形式 index.php?control=c_name&me_name
//将function.php 引入
require_once ('./function.php');
$cAllow=array('test','index');
$meAllow=array('test','index','show');
$c=in_array($_GET['controller'],$cAllow)?daddslashes($_GET['controller']):'index';
$me=in_array($_GET['method'],$meAllow)?daddslashes($_GET['method']):'index';
C($c,$me);
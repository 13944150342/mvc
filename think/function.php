<?php
/**
 * Created by PhpStorm.
 * User: lyly
 * Date: 2016/10/10
 * Time: 21:17
 */
function C($name,$method){
   require_once ('./libs/c/testController.class.php');
   // $c = new testController();
   // $c->show();
    eval('$obj = new '.$name.'Controller();$obj ->'.$method.'();');
}
C('test','show');
function M($name){
    require_once ('./libs/m/'.$name.'Model.class.php');
    eval('$obj = new '.$name.'Model();');
    return $obj ;
}

function V($name){
    require_once ('./libs/v/'.$name.'View.class.php');
    eval('$obj = new '.$name.'View();');
    return $obj ;
}

function daddslashes($str){
  return (!get_magic_quotes_gpc())?addcslashes($str) :$str;
}
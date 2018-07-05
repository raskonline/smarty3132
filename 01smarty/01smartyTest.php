<?php
//引入smarty类
require "libs/Smarty.class.php";

//实例化samrty
$smarty=new Smarty();

//传值
$smarty->assign("title","白头吟");
$smarty->assign("content","愿得一人心，白首不分离！");

//生成混编文件
$smarty->display("view.html");
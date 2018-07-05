<?php
//引入smarty类
require "libs/Smarty.class.php";

//实例化samrty
$smarty=new Smarty();

//指定模板目录
$smarty->setTemplateDir("./views/");
//指定混编文件路径
$smarty->setCompileDir("./views_c/");

//传值
$smarty->assign("title","白头吟");
$smarty->assign("content","愿得一人心，白首不分离！");
$smarty->assign("name",$_GET['name']);

//常量也是全局常量
define("PI",3.1415926);


//生成混编文件
$smarty->display("view2.html");
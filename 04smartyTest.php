<?php
//CSS样式使用配置文件

//引入smarty类
require "libs/Smarty.class.php";

//实例化samrty
$smarty=new Smarty();

//指定模板目录
$smarty->setTemplateDir("./views/");
//指定混编文件路径
$smarty->setCompileDir("./views_c/");

//传值
$smarty->assign("title","狼文化");
$smarty->assign("content","学习的，是狼的耐性，不是野性。");



//生成混编文件
$smarty->display("view4.html");
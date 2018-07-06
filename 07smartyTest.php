<?php
//条件语句

//引入smarty类
require "libs/Smarty.class.php";

//实例化samrty
$smarty = new Smarty();

//指定模板目录
$smarty->setTemplateDir("./views/");
//指定混编文件路径
$smarty->setCompileDir("./views_c/");

//传值
$smarty->assign("a",@$_GET['a']);

//数组
$smarty->assign("fruits",["苹果","香蕉","菠萝","西瓜"]);


//生成混编文件
$smarty->display("view7.html");
<?php
//smarty渲染元素

//引入smarty类
require "libs/Smarty.class.php";

//实例化samrty
$smarty = new Smarty();

//指定模板目录
$smarty->setTemplateDir("./views/");
//指定混编文件路径
$smarty->setCompileDir("./views_c/");

//传值
//复选框
$smarty->assign('hobby',['read'=>"阅读",'sport'=>"运动",'music'=>"音乐"]);
$smarty->assign("cval",'sport');//设置单个默认值
$smarty->assign("mcval",['sport','music']);//设置多个默认值
//下拉框
$smarty->assign("city",["厦门","福州","北京"]);
$smarty->assign("cityval",1);
//单选框
$smarty->assign("gender",["男","女"]);
$smarty->assign("genderval",0);


//生成混编文件
$smarty->display("view6.html");
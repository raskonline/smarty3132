<?php
//引入smarty类
require "libs/Smarty.class.php";

//实例化samrty
$smarty=new Smarty();
//指定解析符号:{}和样式表的符号冲突。样式表的{}添加空格和自动换行后就不会冲突。
$smarty->setLeftDelimiter("<{");
$smarty->setRightDelimiter("}>");
//指定模板目录
$smarty->setTemplateDir("./views/");
//指定混编文件路径
$smarty->setCompileDir("./vies_c/");

//传值
$smarty->assign("title","白头吟");
$smarty->assign("content","愿得一人心，白首不分离！");

//生成混编文件
$smarty->display("view.html");
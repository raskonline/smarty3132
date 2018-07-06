<?php
//CSS样式使用配置文件

//引入smarty类
require "libs/Smarty.class.php";

//实例化samrty
$smarty = new Smarty();

//指定模板目录
$smarty->setTemplateDir("./views/");
//指定混编文件路径
$smarty->setCompileDir("./views_c/");

//传值
$smarty->assign("title", "强者");
$smarty->assign("content", "真正的强者无需自证，更无需他证。");
//索引数组
$smarty->assign("list", ["张三", "李刚", "小王"]);
$smarty->assign("listnull", null);
//关联数组
$smarty->assign("kvlist", ["boss" => "张sir", "CTO" => "李sir", "CFO" => "小王sir"]);
//多维数组$smarty->assign("mkvlist", ["boss" => "张sir", "CTO" => "李sir", "CFO" => "小王sir", "coms" => ["xm" => "厦门", "fz" => "福州", "pk" => "北京"]]);


//生成混编文件
$smarty->display("view5.html");
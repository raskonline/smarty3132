<?php
//模板的继承

//引入smarty类
require "libs/Smarty.class.php";

//实例化samrty
$smarty = new Smarty();

//指定模板目录
$smarty->setTemplateDir("./views/");
//指定混编文件路径
$smarty->setCompileDir("./views_c/");

//渲染子模板
$smarty->display("mainsub.html");
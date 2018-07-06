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
if (isset($_GET['a'])) {
    $page = $_GET['a'];
} else {
    $page = 1;
}

if ($page == 1) {
    $smarty->display("homemain.html");
} else {
    $smarty->display("homeright.html");
}
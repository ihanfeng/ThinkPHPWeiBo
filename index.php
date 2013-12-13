<?php
/**
* 项目入口文件
* Some rights reserved：FengJing Technology
* Contact email:zhdevelop@gmail.com
*/

//开启调试模式
define('APP_DEBUG',true);
//网站根目录，通过getcwd()函数获取当前工作目录
define('SITE_PATH', getcwd());
//定义项目名称
define('APP_NAME', 'App');
//定义项目路径
define('APP_PATH', SITE_PATH . '/App/');
//定义项目运行时目录，存放缓存、日志之类数据
define("RUNTIME_PATH", SITE_PATH . "/Runtime/");

//判断是否创建数据库配置文件，如果没有创建则进入系统安装界面，有则退出进入系统前台首页
// if (!file_exists(APP_PATH . 'Conf/dataconfig.php')) {
// header("Location: install/");
// exit;
// }

//加载ThinkPHP框架核心文件
require APP_PATH . 'Core/ThinkPHP.php';
?>
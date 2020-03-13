<?php
// 调试模式
define('DEBUG', true);
// 根目录
define('ROOT_PATH', dirname(__DIR__));

// 公共方法
include ROOT_PATH . '/common/function.php';

// composer自动加载
include ROOT_PATH . '/vendor/autoload.php';

if (DEBUG) {
    error_reporting(E_ALL);
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
} else {
    error_reporting(0);
}

// 启动框架
\piaowa\core\Piaowa::run();
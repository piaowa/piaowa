<?php
/**
 *  入口文件
 *  1、定义常量
 *  2、加载函数库
 *  3、启动框架
 */
// 调试模式
define('DEBUG', true);
// 根目录
define('ROOT',  dirname(__DIR__));

// 公共方法
include ROOT.'/core/function.php';

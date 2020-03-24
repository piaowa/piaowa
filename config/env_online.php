<?php
// 路径是基于根目录
return array(
    // 数据库
    'database' => array(
        'database_type' => 'mysql',
        'database_name' => 'piaowa',
        'server' => '127.0.0.1',
        'username' => 'root',
        'password' => 'piaowa',
        'charset' => 'utf8mb4',
        'port' => 3306,
    ),
    // redis缓存
    'redis' => array(
        'host' => '127.0.0.1',
        'port' => '6379',
        'username' => '',
        'password' => '',
        'index' => 0,
    ),
    // 默认路由
    'route' => array(
        'preg' => '/^[a-zA-Z]+(\/[a-zA-Z]*)?$/',
        'default' => 'index/index',
        'defaultAction' => 'index',
    ),
    // 日志目录
    'logPath' => 'logs',
    // 控制器目录
    'controllerPath'=>'app/controller',
    // 模型目录
    'modelPath'=>'app/model',
);
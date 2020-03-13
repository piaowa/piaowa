<?php
// 路径是基于根目录
return array(
    'logPath' => 'logs',
    'database' => array(
        'type' => 'mysql',
        'host' => '127.0.0.1',
        'port' => 3306,
        'username' => 'root',
        'password' => 'piaowa',
    ),
    'redis' => array(
        'host' => '127.0.0.1',
        'port' => '6379',
        'username' => '',
        'password' => '',
        'index'=>0,
    ),
);
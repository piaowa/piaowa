<?php
require '../vendor/autoload.php';
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$a = 1/0;
// 框架核心应用层

$application = function($name) {

    echo "this is a {$name} application\n";

};



// 前置校验中间件

$auth = function($handler) {

    return function($name) use ($handler) {

        echo "{$name} need a auth middleware\n";

        return $handler($name);

    };

};




// 前置过滤中间件

$filter = function($handler) {

    return function($name) use ($handler) {

        echo "{$name} need a filter middleware\n";

        return $handler($name);

    };

};



// 后置日志中间件

$log = function($handler) {

    return function($name) use ($handler) {

        $return = $handler($name);

        echo "{$name} need a log middleware\n";

        return $return;

    };

};



// 中间件栈

$stack = [];



// 打包

function pack_middleware($handler, $stack)

{

    $a = array_reverse($stack);
    foreach (array_reverse($stack) as $key => $middleware)

    {

        $handler = $middleware($handler);

    }

    return $handler;

}



// 注册中间件

// 这里用的都是全局中间件，实际应用时还可以为指定路由注册局部中间件

$stack['log'] = $log;

$stack['filter'] = $filter;

$stack['auth'] = $auth;



$run = pack_middleware($application, $stack);

$run('Laravle');
<?php
/**
 * Class Controller控制器基类
 * 主要在此进行权限校验等中间件过滤
 */

namespace piaowa\lib;

use piaowa\core\Piaowa;

class Controller
{
    public function __construct()
    {
    }

    /**
     * 前置方法
     * @param $class
     * @param $action
     * @return bool
     */
    public function before()
    {
//        echo 'before';
//        echo Piaowa::$router->myClass;
//        echo Piaowa::$router->myAction;
        return true;
    }

    /**
     * 后置方法
     * @param $class
     * @param $action
     */
    public function after()
    {
//        echo 'after';
    }
}
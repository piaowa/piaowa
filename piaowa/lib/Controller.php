<?php
/**
 * Class Controller控制器基类
 * 主要在此进行权限校验等中间件过滤
 */

namespace piaowa\lib;
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
    public function before($class, $action)
    {
//        echo 'before';
        return true;
    }

    /**
     * 后置方法
     * @param $class
     * @param $action
     */
    public function after($class, $action)
    {
//        echo 'after';
    }
}
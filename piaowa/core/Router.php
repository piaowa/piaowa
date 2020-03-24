<?php
/**
 * 路由控制类
 * 默认方式： xx.com/控制器/方法
 */

namespace piaowa\core;
class Router
{
    public $route;
    public $myClass;
    public $myAction;

    public function __construct()
    {
        $this->route = Config::get('route');
        $preg = $this->route['preg'];
        $routePath = isset($_GET['s']) ? $_GET['s'] : $this->route['default'];
        $routePath = trim($routePath, '/');
        if (!preg_match($preg, $routePath)) {
            return ajaxReturnError('系统错误！');
        }
        $routePathArr = explode('/', $routePath);
        $this->myClass = ucfirst($routePathArr[0]);
        if (count($routePathArr) == 2) {
            $this->myAction = $routePathArr[1];
        } else {
            $this->myAction = $this->route['defaultAction'];
        }
    }
}
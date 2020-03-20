<?php

namespace piaowa\core;
class Piaowa
{
    public function __construct()
    {
    }

    static public function run()
    {
        $route = new Router();
        $controller = $route->myClass;
        $action = $route->myAction;
        $filePath = ROOT_PATH . '/' . MODULE . '/controller/' . $controller . '.php';
        $runClass = '\\' . MODULE . '\controller\\' . $controller;
        if (is_file($filePath)) {
            include_once $filePath;
            $class = new $runClass;
            $tryArr = array($class, $action);
            if (is_callable($tryArr)) {
                if ($class->before($class, $action)) {
                    $class->$action();
                }
                $class->after($class, $action);
            } else {
                throw new \Exception('找不到方法' . $action);
            }
        } else {
            throw new \Exception('找不到控制器' . $filePath);
        }
    }
}
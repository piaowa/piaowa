<?php
/**
 * 框架核心类
 */

namespace piaowa\core;
class Piaowa
{
    public static $logger;
    public static $router;

    static public function run()
    {
        self::$logger = new Logger();
        self::$router = new Router();
        $controller = self::$router->myClass;
        $action = self::$router->myAction;
        $filePath = ROOT_PATH . '/' . MODULE . '/controller/' . $controller . '.php';
        $runClass = '\\' . MODULE . '\controller\\' . $controller;
        if (is_file($filePath)) {
            include_once $filePath;
            $class = new $runClass;
            $tryArr = array($class, $action);
            if (is_callable($tryArr)) {
                if ($class->before()) {
                    $class->$action();
                }
                $class->after();
            } else {
                throw new \Exception('找不到方法' . $action);
            }
        } else {
            throw new \Exception('找不到控制器' . $filePath);
        }
    }
}
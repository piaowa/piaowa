<?php
/**
 * 自动加载配置类
 */

namespace piaowa\core;

class Config
{
    static public $myConfig;

    static public function get($config, $name = 'all')
    {
        // 已经存在配置
        if (isset(self::$myConfig[$config][$name])) {
            return self::$myConfig[$config][$name];
        }
        // 不存在则加载
        // 1、判断文件是否存在
        // 2、加载文件
        // 3、载入配置
        $configFile = ROOT_PATH . '/config/' . $config . '.php';
        if (is_file($configFile)) {
            $configArr = include_once $configFile;
            if ($name == 'all') {
                self::$myConfig[$config] = $configArr;
                return $configArr;
            } else if (array_key_exists($name, $configArr)) {
                self::$myConfig[$config][$name] = $configArr[$name];
                return $configArr[$name];
            } else {
                throw new Exception('invalid config');
            }
        } else {
            throw new \Exception('invalid file');
        }

    }
}
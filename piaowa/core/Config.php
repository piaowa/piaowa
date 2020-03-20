<?php
/**
 * 自动加载配置类
 */

namespace piaowa\core;

class Config
{
    static public $envConfig;
    static public $myConfig;

    static public function init($config)
    {
        self::$envConfig = $config;
        return self::getAll($config);
    }

    static public function get($index = null, $config = null)
    {
        if (null === $config) {
            $config = self::$envConfig;
        }
        // 已经存在配置
        if (array_key_exists($config, self::$myConfig)) {
            if (array_key_exists($index, self::$myConfig[$config])) {
                return self::$myConfig[$config][$index];
            } else {
                throw new \Exception('invalid config index');
            }
        } else {
            self::getAll($config);
            return self::get($index, $config);
        }
    }

    static public function getAll($config = null)
    {
        if (null === $config) {
            $config = self::$envConfig;
        }
        // 已经存在配置
        if (isset(self::$myConfig[$config])) {
            return self::$myConfig[$config];
        }
        // 不存在则加载
        // 1、判断文件是否存在
        // 2、加载文件
        // 3、载入配置
        $configFile = ROOT_PATH . '/config/' . $config . '.php';
        if (is_file($configFile)) {
//            echo '载入配置文件' . $config;
            $configArr = include_once $configFile;
            self::$myConfig[$config] = $configArr;
            return $configArr;
        } else {
            throw new \Exception('invalid file');
        }
    }
}
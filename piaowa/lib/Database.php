<?php

/**
 * 数据库模型
 * Class Mysql
 */

namespace piaowa\lib;

use Medoo\Medoo;
use piaowa\core\Config;

class Database
{
    static public $medoo = null;

    static public function medoo($options = null)
    {
//        if (self::$medoo == null) {
            $options = $options ? $options : Config::get('database');
//            var_dump($options);exit;
            self::$medoo = new Medoo($options);
            echo '连接数据库';
//        }
            return self::$medoo;
    }
}
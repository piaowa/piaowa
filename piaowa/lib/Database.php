<?php

/**
 * 数据库模型
 * Class Database
 */

namespace piaowa\lib;

use Medoo\Medoo;
use piaowa\core\Config;
use piaowa\core\Piaowa;

class Database extends Piaowa
{
    static public $medoo = null;

    static public function medoo($options = null)
    {
        if (self::$medoo == null) {
            $options = $options ? $options : Config::get('database');
            self::$medoo = new Medoo($options);
            Piaowa::$logger->info('连接数据库', []);
        }
        return self::$medoo;
    }
}
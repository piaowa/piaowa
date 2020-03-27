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
    static public $mysql;

    static public function init($options = null)
    {
        $options = $options ? $options : Config::get('database');
        $key = $options['server'] . '_' . $options['database_name'];
        if (!isset(self::$mysql[$key])) {
            self::$mysql[$key] = new Medoo($options);
            Piaowa::$logger->info('连接数据库', $options);
        }
        return self::$mysql[$key];

    }
}
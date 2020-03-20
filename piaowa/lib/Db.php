<?php

namespace piaowa\lib;

use Medoo\Medoo;
use piaowa\core\Config;

class Db
{
    private static $instance = null;
    public $db = null;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (null == self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function connect($options = null)
    {
//        if (null == $this->db) {
            $options = $options ? $options : Config::get('database');
            $this->db = new Medoo($options);
            echo '连接数据库';
//        }
        return $this->db;
    }
}
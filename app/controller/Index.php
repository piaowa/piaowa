<?php

namespace app\controller;

use piaowa\core\Config;
use piaowa\lib\Controller;
use piaowa\lib\Database;
use piaowa\lib\Db;

class Index extends Controller
{
    public function index()
    {
        echo 'hello, this is first controller';
    }

    public function test()
    {
        $config = Config::get('database', 'error_msg');
        $db1 = Database::medoo();
        $this->testdb($db1);
        $db2 = Database::medoo($config);
        $this->testdb($db2);
        $this->testdb($db1);
        $db1 = Database::medoo();
    }

    public function testdb($db)
    {
        $a = $db->select('user', '*');
        dump($a);
    }
}
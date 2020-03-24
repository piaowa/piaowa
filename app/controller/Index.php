<?php

namespace app\controller;

use piaowa\core\Config;
use piaowa\core\Piaowa;
use piaowa\lib\Controller;
use piaowa\lib\Database;
use piaowa\lib\Db;
use piaowa\lib\Log;
use piaowa\lib\Logger;

class Index extends Controller
{
    public function index()
    {
        echo 'hello, this is first controller';
    }
    public function abc(){
        echo '丁臭臭是头猪！';
        $a = array('丁臭臭是头猪');
        Piaowa::$logger->info('日志', $a);
    }

    public function test()
    {
        $ary = array(
            'abc' => 1,
            'acc' => 1,
            'adc' => 1,
        );
        Piaowa::$logger->info('日志', $ary);
        $db = Database::medoo();
//        dump($db);
        $this->testdb($db);
    }

    public function testdb($db)
    {
        $array = array(
            'username'=>'piaowa',
            'password'=>md5('piaowa'),
        );
        $db->insert('user', $array);
        $a = $db->select('user', '*');
        dump($a);
    }
}
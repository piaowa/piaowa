<?php
/**
 * Redis
 */

namespace piaowa\lib;

use piaowa\core\Config;
use piaowa\core\Piaowa;

class RedisCli extends \Redis
{
    static public $redis;

    static public function init($index = 0, $options = null)
    {
        if (!isset(self::$redis[$index])) {
            $options = $options ? $options : Config::get('redis');
            $redis = new \Redis();
            $result = $redis->pconnect($options['host'], $options['port']);
            if (!$result) {
                throw new \Exception('Redis连接失败');
            }
            $result = $redis->auth($options['auth']);
            if (!$result) {
                throw new \Exception('Redis密码验证失败');
            }

            Piaowa::$logger->info('连接缓存', $options);
            $redis->select($index);
            self::$redis[$index] = $redis;
        }
        return self::$redis[$index];
    }
}
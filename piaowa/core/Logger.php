<?php
/**
 * 日志
 */

namespace piaowa\core;

use Psr\Log\LoggerTrait;

class Logger
{
    use LoggerTrait;
    private $logFile;
    private $processID;

    public function __construct()
    {
        $today = date('Ymd');
        $logPath = Config::get('logPath');
        $this->logFile = ROOT_PATH . '/' . $logPath . '/' . $today . '.log';
        $this->processID = function_exists('posix_getpid') ? posix_getpid() : 0;
    }

    /**
     * Logs with an arbitrary level.
     *
     * @param mixed $level
     * @param string $message
     * @param array $context
     *
     * @return void
     *
     * @throws \Psr\Log\InvalidArgumentException
     */
    public function log($level, $message, array $context = array())
    {
        $date = date('[Y-m-d H:i:s]');
        $context = json_encode($context, JSON_UNESCAPED_UNICODE);
        $msg = "[$this->processID] $date: [$level][$message] - $context" . PHP_EOL;
        if (!is_dir(dirname($this->logFile))) {
            mkdir(dirname($this->logFile), 0777);
        }
        file_put_contents($this->logFile, $msg, FILE_APPEND);
    }

}
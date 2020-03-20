<?php
namespace piaowa\lib;
use Psr\Log\LoggerInterface;
class Log {
    private $logger;

    public function __construct(LoggerInterface $logger = null)
    {
        $this->logger = $logger;
    }
    public function doSomething()
    {
        if ($this->logger) {
            $this->logger->info('Doing work');
        }

        try {
            $this->doSomethingElse();
        } catch (Exception $exception) {
            $this->logger->error('Oh no!', array('exception' => $exception));
        }

        // do something useful
    }
}
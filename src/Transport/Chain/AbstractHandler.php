<?php


namespace Ligorikus\CustomMailerLaravel\Transport\Chain;

use Swift_Transport;
use Ligorikus\CustomMailerLaravel\Transport\Transport;

class AbstractHandler
{
    /**
     * @var Handler
     */
    private $nextHandler;

    /**
     * @param Handler $handler
     * @return Handler
     */
    public function setNext(Handler $handler): Handler
    {
        $this->nextHandler = $handler;
        return $handler;
    }

    /**
     * @param array $config
     * @return Transport|null
     */
    public function handle(array $config): ?Swift_Transport
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($config);
        }

        return null;
    }
}

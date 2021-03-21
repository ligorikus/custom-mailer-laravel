<?php

namespace Ligorikus\CustomMailerLaravel\Transport\Chain;

use Swift_Transport;
use Ligorikus\CustomMailerLaravel\Transport\Transport;

interface Handler
{
    public function setNext(Handler $handler): Handler;

    public function handle(array $config): ?Swift_Transport;
}

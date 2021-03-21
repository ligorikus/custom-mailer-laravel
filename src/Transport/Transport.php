<?php


namespace Ligorikus\CustomMailerLaravel\Transport;

use Swift_Transport;
use Ligorikus\CustomMailerLaravel\Component\Component;

interface Transport
{
    public function make(Component $component) : Swift_Transport;
}

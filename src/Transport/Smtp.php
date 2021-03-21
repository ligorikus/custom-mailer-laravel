<?php


namespace Ligorikus\CustomMailerLaravel\Transport;

use Swift_Transport;
use Swift_SmtpTransport;
use Ligorikus\CustomMailerLaravel\Component\Component;

class Smtp implements Transport
{
    /**
     * @param \Ligorikus\CustomMailerLaravel\Component\Smtp $smtp
     * @return Swift_Transport
     */
    public function make(Component $smtp): Swift_Transport
    {
        return (new Swift_SmtpTransport($smtp->getHost(), $smtp->getPort()))
            ->setUsername($smtp->getUsername())
            ->setPassword($smtp->getPassword())
            ->setEncryption($smtp->getEncryption())
            ->setPort($smtp->getPort());
    }
}

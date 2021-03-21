<?php


namespace Ligorikus\CustomMailerLaravel\Transport\Chain;

use Ligorikus\CustomMailerLaravel\Transport\Smtp;
use Swift_Transport;
use Ligorikus\CustomMailerLaravel\Transport\Mailgun;

class SmtpHandler extends AbstractHandler
{
    public function handle(array $config): ?Swift_Transport
    {
        if ($config['use_smtp'] && $config['smtp_host'] != null) {
            $smtp = new \Ligorikus\CustomMailerLaravel\Component\Smtp($config['smtp_host'], $config['smtp_username'], $config['smtp_password'], $config['smtp_encryption'], $config['smtp_port']);
            return (new Smtp())->make($smtp);
        } else {
            return parent::handle($config);
        }
    }
}

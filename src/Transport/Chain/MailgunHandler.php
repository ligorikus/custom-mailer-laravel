<?php


namespace Ligorikus\CustomMailerLaravel\Transport\Chain;

use Swift_Transport;
use Ligorikus\CustomMailerLaravel\Transport\Mailgun;

class MailgunHandler extends AbstractHandler
{
    public function handle(array $config): ?Swift_Transport
    {
        if ($config['use_mailgun'] && $config['mailgun_api_key'] != null && $config['mailgun_server'] != null && $config['mailgun_server'] != null) {
            $mailgun = new \Ligorikus\CustomMailerLaravel\Component\Mailgun($config['mailgun_api_key'], $config['mailgun_server'], $config['mailgun_domain']);
            return (new Mailgun())->make($mailgun);
        } else {
            return parent::handle($config);
        }
    }
}

<?php


namespace Ligorikus\CustomMailerLaravel;

use Swift_Mailer;
use Ligorikus\CustomMailerLaravel\Transport\Chain\Handler;
use Ligorikus\CustomMailerLaravel\Transport\Chain\MailgunHandler;
use Ligorikus\CustomMailerLaravel\Transport\Chain\SmtpHandler;

class CustomMailer
{
    /**
     * @param array $config
     * @return Swift_Mailer|null
     */
    public function build(array $config) :?Swift_Mailer
    {
        // Creating a new chain of responsibility to select a mail transport
        $mailgun = new MailgunHandler();
        /** @var Handler $smtp */
        $smtp = new SmtpHandler();
        $mailgun->setNext($smtp);
        $transport = $mailgun->handle($config);
        if ($transport !== null) {
            return new Swift_Mailer($transport);
        }
        return null;
    }
}

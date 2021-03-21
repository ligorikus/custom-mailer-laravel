<?php


namespace Ligorikus\CustomMailerLaravel\Transport;

use GuzzleHttp\Client as HttpClient;
use Illuminate\Mail\Transport\MailgunTransport;
use Illuminate\Support\Arr;
use Swift_Transport;
use Ligorikus\CustomMailerLaravel\Component\Component;

class Mailgun implements Transport
{

    /**
     * @param \Ligorikus\CustomMailerLaravel\Component\Mailgun $mailgun
     * @return Swift_Transport
     */
    public function make(Component $mailgun): Swift_Transport
    {
        return new MailgunTransport($this->guzzle(), $mailgun->getApiKey(), $mailgun->getServer(), $mailgun->getDomain());
    }

    private function guzzle()
    {
        return new HttpClient(Arr::add([], 'connect_timeout', 60));
    }
}

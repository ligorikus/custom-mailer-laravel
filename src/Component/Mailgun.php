<?php


namespace Ligorikus\CustomMailerLaravel\Component;

/**
 * Class Mailgun
 * @package Ligorikus\CustomMailerLaravel\Component
 */
class Mailgun implements Component
{
    /**
     * @var string $api_key
     */
    private $api_key;
    /**
     * @var string $server
     */
    private $server;
    /**
     * @var string $domain
     */
    private $domain;

    /**
     * Mailgun constructor.
     * @param string $api_key
     * @param string $server
     * @param string|null $domain
     */
    public function __construct(string $api_key, string $server, string $domain = null)
    {
        $this->api_key = $api_key;
        $this->server = $server;
        $this->domain = $domain;
    }

    /**
     * @param string $api_key
     * @return $this
     */
    public function setApiKey(string $api_key) : Mailgun
    {
        $this->api_key = $api_key;
        return $this;
    }

    /**
     * @param string $server
     * @return $this
     */
    public function setServer(string $server) : Mailgun
    {
        $this->server = $server;
        return $this;
    }

    /**
     * @param string $domain
     * @return $this
     */
    public function setDomain(string $domain) : Mailgun
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @return string
     */
    public function getApiKey() : string
    {
        return $this->api_key;
    }

    /**
     * @return string
     */
    public function getDomain() : string
    {
        return $this->domain;
    }

    /**
     * @return string
     */
    public function getServer() : string
    {
        return $this->server;
    }
}

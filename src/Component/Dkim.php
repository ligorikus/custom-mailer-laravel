<?php


namespace Ligorikus\CustomMailerLaravel\Component;


/**
 * Class Dkim
 * @package Ligorikus\CustomMailerLaravel\Component
 */
class Dkim implements Component
{
    /**
     * @var string $domain
     */
    private $domain;
    /**
     * @var string $selector
     */
    private $selector;
    /**
     * @var string $private_key
     */
    private $private_key;

    /**
     * Dkim constructor.
     * @param string $domain
     * @param string $selector
     * @param string $private_key
     */
    public function __construct(string $domain, string $selector, string $private_key)
    {
        $this->domain = $domain;
        $this->selector = $selector;
        $this->private_key = $private_key;
    }

    /**
     * @param string $domain
     * @return $this
     */
    public function setDomain(string $domain) : Dkim
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @param string $selector
     * @return $this
     */
    public function setSelector(string $selector) : Dkim
    {
        $this->selector = $selector;
        return $this;
    }

    /**
     * @param string $private_key
     * @return $this
     */
    public function setPrivateKey(string $private_key) : Dkim
    {
        $this->private_key = $private_key;
        return $this;
    }
}

<?php


namespace Ligorikus\CustomMailerLaravel\Component;

/**
 * Class Smtp
 * @package Ligorikus\CustomMailerLaravel\Component
 */
class Smtp implements Component
{
    /**
     * @var string $host
     */
    private $host;
    /**
     * @var string|null $username
     */
    private $username;
    /**
     * @var string|null $password
     */
    private $password;
    /**
     * @var string|null $encryption
     */
    private $encryption;
    /**
     * @var string|null $port
     */
    private $port;

    /**
     * Smtp constructor.
     * @param string $host
     * @param string|null $username
     * @param string|null $password
     * @param null $encryption
     * @param string $port
     */
    public function __construct(string $host, string $username = null, string $password = null, $encryption = null, $port = '25')
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->encryption = $encryption;
        $this->port = $port;
    }

    /**
     * @param string $host
     * @return $this
     */
    public function setHost(string $host) : Smtp
    {
        $this->host = $host;
        return $this;
    }

    /**
     * @param string $username
     * @return $this
     */
    public function setUsername(string $username) : Smtp
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @param string $password
     * @return $this
     */
    public function setPassword(string $password) : Smtp
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @param string $encryption
     * @return $this
     */
    public function setEncryption(string $encryption) : Smtp
    {
        $this->encryption = $encryption;
        return $this;
    }

    /**
     * @param string $port
     * @return $this
     */
    public function setPort(string $port) : Smtp
    {
        $this->port = $port;
        return $this;
    }

    /**
     * @return string
     */
    public function getHost() : string
    {
        return $this->host;
    }

    /**
     * @return string
     */
    public function getUsername() : string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword() : string
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getEncryption() : string
    {
        return $this->encryption;
    }

    /**
     * @return string
     */
    public function getPort() : string
    {
        return $this->port;
    }
}

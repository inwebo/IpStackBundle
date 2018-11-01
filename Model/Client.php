<?php

namespace Inwebo\Bundle\IpStackBundle\Model;

class Client
{
    /** @var string */
    protected $enPoint;
    /** @var array */
    protected $ipAddress = [];
    /** @var string */
    protected $accessKey;
    /** @var array */
    protected $fields = [];
    /** @var bool */
    protected $hostname = false;
    /** @var bool */
    protected $security = false;
    /** @var string|null */
    protected $language;
    /** @var string|null */
    protected $callback;
    /** @var string json|xml*/
    protected $output = 'json';

    // region getters setters
    /**
     * @return string
     */
    public function getEnPoint(): string
    {
        return $this->enPoint;
    }

    /**
     * @param string $enPoint
     */
    public function setEnPoint(string $enPoint): void
    {
        $this->enPoint = $enPoint;
    }

    /**
     * @return array
     */
    public function getIpAddress(): array
    {
        return $this->ipAddress;
    }

    /**
     * @param string $ipAddress
     */
    public function addIpAddress(string $ipAddress): void
    {
        $this->ipAddress[] = $ipAddress;
    }

    /**
     * @return string
     */
    public function getAccessKey(): string
    {
        return $this->accessKey;
    }

    /**
     * @param string $accessKey
     */
    public function setAccessKey(string $accessKey): void
    {
        $this->accessKey = $accessKey;
    }

    /**
     * @return array
     */
    public function getFields(): array
    {
        return $this->fields;
    }

    /**
     * @param array $fields
     */
    public function setFields(array $fields): void
    {
        $this->fields = $fields;
    }

    /**
     * @return bool
     */
    public function isHostname(): bool
    {
        return $this->hostname;
    }

    /**
     * @param bool $hostname
     */
    public function setHostname(bool $hostname): void
    {
        $this->hostname = $hostname;
    }

    /**
     * @return bool
     */
    public function isSecurity(): bool
    {
        return $this->security;
    }

    /**
     * @param bool $security
     */
    public function setSecurity(bool $security): void
    {
        $this->security = $security;
    }

    /**
     * @return null|string
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * @param null|string $language
     */
    public function setLanguage(?string $language): void
    {
        $this->language = $language;
    }

    /**
     * @return null|string
     */
    public function getCallback(): ?string
    {
        return $this->callback;
    }

    /**
     * @param null|string $callback
     */
    public function setCallback(?string $callback): void
    {
        $this->callback = $callback;
    }

    /**
     * @return string
     */
    public function getOutput(): string
    {
        return $this->output;
    }

    /**
     * @param string $output
     */
    public function setOutput(string $output): void
    {
        $this->output = $output;
    }
    // endregion

    public function __construct(string $endPoint)
    {
        $this->enPoint = $endPoint;
    }

    /**
     * @return string
     */
    public function query()
    {
        $url = $this->enPoint;
        $_GETArgs = [];

        $ipAddress = implode(',', $this->getIpAddress());

        if ($this->hostname) {
            $_GETArgs['hostname'] = '1';
        }

        if ($this->security) {
            $_GETArgs['security'] = '1';
        }

        if (!is_null($this->language)) {
            $_GETArgs['language'] = $this->language;
        }

        if (!is_null($this->callback)) {
            $_GETArgs['callback'] = $this->callback;
        }

        if (!is_null($this->output)) {
            $_GETArgs['output'] = $this->output;
        }

        $_GETString = '?' . implode('&', $_GETArgs);

        $url = $url . $ipAddress . $_GETString;

        $json = file_get_contents($url);

        return $json;
    }
}
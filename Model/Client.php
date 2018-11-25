<?php

namespace Inwebo\Bundle\IpStackBundle\Model;

use Inwebo\Bundle\IpStackBundle\Model\Exceptions\InvalidJsonPCallbackException;
use Inwebo\Component\IpStack\Model\IpStack;

/**
 * Class Client
 */
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
    protected $language = null;
    /** @var string|null */
    protected $callback = null;
    /** @var string json|xml*/
    protected $output;

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
    protected function setEnPoint(string $enPoint): void
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

    /**
     * JSONP Callbacks can only be used along with the API's output format being set to json
     *
     * @return string
     */
    public function isValidJsonPCallback()
    {
        return $this->getOutput() === IpStack::SUPPORTED_OUTPUT['json'] && !is_null($this->getCallback());
    }

    /**
     * Client constructor.
     *
     * @param string $endPoint
     * @param string $output
     */
    public function __construct(string $endPoint = IpStack::END_POINT, string $output = IpStack::SUPPORTED_OUTPUT['json'])
    {
        $this->enPoint = $endPoint;
        $this->output  = $output;
    }

    /**
     * @return string
     *
     * @throws InvalidJsonPCallbackException
     */
    protected function getUrl()
    {
        $endPoint = $this->enPoint;

        $ipAddress = implode(',', $this->getIpAddress());

        $_GETArgs = [];

        $_GETArgs['access_key'] = $this->getAccessKey();

        // @todo fields

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
            if ($this->isValidJsonPCallback()) {
                $_GETArgs['callback'] = $this->callback;
            } else {
                throw new InvalidJsonPCallbackException();
            }
        }

        if (!is_null($this->output)) {
            $_GETArgs['output'] = $this->output;
        }

        $_GETString = '?' . http_build_query($_GETArgs);

        return $endPoint . $ipAddress . $_GETString;
    }

    /**
     * @return string Json
     *
     * @throws \Exception|InvalidJsonPCallbackException
     */
    public function query()
    {
        try {
            $url = $this->getUrl();
            $json = file_get_contents($url);
        } catch (\Exception $e) {
            throw $e;
        }

        return $json;
    }
}
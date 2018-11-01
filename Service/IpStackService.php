<?php
/**
 * Created by PhpStorm.
 * User: inwebo
 * Date: 28/10/18
 * Time: 19:43
 */

namespace Inwebo\Bundle\IpStackBundle\Service;

use Inwebo\Bundle\IpStackBundle\Model\ClientInterface;
use Inwebo\Bundle\IpStackBundle\Model\Factory;
use Inwebo\Bundle\IpStackBundle\Model\FactoryInterface;
use Inwebo\Component\IpStack\Model\Response;
use Inwebo\Component\IpStack\Model\ResponseInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class IpStackService
{
    /** @var RequestStack */
    protected $requestStack;
    /** @var ClientInterface */
    protected $client;
    /** @var string */
    protected $apiKey;
    /** @var string */
    protected $endPoint;
    /** @var Factory */
    protected $factory;

    /**
     * @return string
     */
    public function getIp()
    {
        // FR
        // return "92.154.18.101";
        // BE
        // return "5.23.128.12";
        // LU
        // return "78.141.128.12";
        return $this->requestStack->getCurrentRequest()->getClientIp();
    }

    /**
     * IpStackService constructor.
     * @param RequestStack $requestStack
     * @param ClientInterface $client
     * @param FactoryInterface $factory
     * @param string $endPoint
     * @param string $apiKey
     */
    public function __construct(RequestStack $requestStack, ClientInterface $client, FactoryInterface $factory, string $endPoint, string $apiKey)
    {
        $this->requestStack = $requestStack;
        $this->factory      = $factory;
        $this->client       = $client;
        $this->apiKey       = $apiKey;
        $this->endPoint     = $endPoint;
    }

    /**
     * @return ResponseInterface
     *
     * @throws \Exception
     */
    public function get()
    {
        /** @var string $url */
        $url = $this->getQueryString($this->getIp());
        /** @var string $json */
        $json = $this->client->query($url);

        try {
            /** @var ResponseInterface $response */
            $response = $this->factory->create($json);
        } catch (\Exception $e) {
            throw $e;
        }

        return $response;
    }

    /**
     * @param string $ip
     *
     * @return string
     */
    public function getQueryString(string $ip)
    {
        return sprintf($this->endPoint, $ip, $this->apiKey);
    }
}
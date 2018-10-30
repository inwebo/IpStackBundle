<?php
/**
 * Created by PhpStorm.
 * User: inwebo
 * Date: 28/10/18
 * Time: 19:43
 */

namespace Inwebo\Bundle\IpStackBundle\Service;

use Symfony\Component\HttpFoundation\RequestStack;

class IpStackService
{
    /** @var RequestStack */
    protected $requestStack;
    /** @var string */
    protected $accessKey;
    /** @var string */
    protected $endPoint;

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

    public function __construct(RequestStack $requestStack, $accessKey, $endPoint)
    {
        $this->requestStack = $requestStack;
        $this->accessKey    = $accessKey;
        $this->endPoint     = $endPoint;
    }

    public function getIpStack()
    {

        $ip = $this->getIp();
        $queryString = 'https://api.ipstack.com/';
        $response = file_get_contents($queryString);

        var_dump($response);
    }
}
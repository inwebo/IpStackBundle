<?php
/**
 * Created by PhpStorm.
 * User: inwebo
 * Date: 25/11/18
 * Time: 12:53
 */

namespace Inwebo\Bundle\IpStackBundle\Entity;

use Inwebo\Component\IpStack\Model\Response as BaseResponse;

/**
 * Class Response
 *
 * @ORM\Entity(repositoryClass="Inwebo\Bundle\IpStackBundle\Entity\ResponseRepository")
 */
class Response extends BaseResponse
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $ip;
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $hostName;
    /**
     * @ORM\Column(type="string", length=4)
     */
    protected $type;
    /**
     * @ORM\Column(type="string", length=2)
     */
    protected $continentCode;
    /**
     * @ORM\Column(type="string", length=32)
     */
    protected $continentName;
    /**
     * @ORM\Column(type="string", length=2)
     */
    protected $countryCode;
    /**
     * @ORM\Column(type="string", length=32)
     */
    protected $countryName;
    /**
     * @ORM\Column(type="string", length=32)
     */
    protected $regionCode;
    /**
     * @ORM\Column(type="string", length=32)
     */
    protected $regionName;
    /**
     * @ORM\Column(type="string", length=32)
     */
    protected $city;
    /**
     * @ORM\Column(type="string", length=32)
     */
    protected $zip;
    /**
     * @ORM\Column(type="float")
     */
    protected $latitude;
    /**
     * @ORM\Column(type="float")
     */
    protected $longitude;
    /** @var LocationInterface */
    protected $location;
    /** @var TimeZoneInterface */
    protected $timeZone;
    /** @var CurrencyInterface */
    protected $currency;
    /** @var ConnectionInterface */
    protected $connection;
    /** @var SecurityInterface */
    protected $security;
}
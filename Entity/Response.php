<?php
/**
 * Created by PhpStorm.
 * User: inwebo
 * Date: 25/11/18
 * Time: 12:53
 */

namespace Inwebo\Bundle\IpStackBundle\Entity;

use Inwebo\Component\IpStack\Model\LocationInterface;
use Inwebo\Component\IpStack\Model\Response as BaseResponse;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class Response
 *
 * @ORM\Entity(repositoryClass="Inwebo\Bundle\IpStackBundle\Entity\ResponseRepository")
 *
 * @ORM\Table(name="ipstack__response")
 */
class Response extends BaseResponse
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=39)
     * @Assert\Length(
     *     min=7,
     *     max=39
     * )
     * @Assert\Ip()
     * @Assert\NotBlank()
     * @Groups({"ip"})
     */
    protected $ip;
    /**
     * @ORM\Column(type="string", length=255, name="host_name")
     * @Assert\Type("string")
     * @Groups({"host_name"})
     */
    protected $hostName;
    /**
     * @ORM\Column(type="string", length=4)
     * @Assert\Type("string")
     * @Assert\Length(
     *     min=4,
     *     max=4
     * )
     */
    protected $type;
    /**
     * @ORM\Column(type="string", length=2, name="continent_code")
     * @Assert\Type("string")
     * @Assert\Length(
     *     min=2,
     *     max=2
     * )
     * @Groups({"continent_code"})
     */
    protected $continentCode;
    /**
     * @ORM\Column(type="string", length=32, name="continent_name")
     * @Assert\Type("string")
     * @Assert\Length(
     *     max=32
     * )
     * @Groups({"continent_name"})
     */
    protected $continentName;
    /**
     * @ORM\Column(type="string", name="country_code")
     * @Assert\Type("string")
     * @Assert\Length(
     *     min=2,
     *     max=2
     * )
     * @Groups({"continent_name"})
     */
    protected $countryCode;
    /**
     * @ORM\Column(type="string", length=32, name="country_name")
     * @Assert\Type("string")
     * @Assert\Length(
     *     max=32
     * )
     * @Groups({"country_name"})
     */
    protected $countryName;
    /**
     * @ORM\Column(type="string", length=32, name="region_code")
     * @Assert\Type("string")
     *
     * @Groups({"region_code"})
     */
    protected $regionCode;
    /**
     * @ORM\Column(type="string", length=32, name="region_name")
     * @Assert\Type("string")
     *
     * @Groups({"region_name"})
     */
    protected $regionName;
    /**
     * @ORM\Column(type="string", length=32)
     * @Assert\Type("string")
     *
     * @Groups({"city"})
     */
    protected $city;
    /**
     * @ORM\Column(type="string", length=32)
     * @Assert\Type("string")
     *
     * @Groups({"zip"})
     */
    protected $zip;
    /**
     * @ORM\Column(type="float")
     * @Assert\Type("float")
     *
     * @Groups({"latitude"})
     */
    protected $latitude;
    /**
     * @ORM\Column(type="float")
     * @Assert\Type("float")
     *
     * @Groups({"longitude"})
     */
    protected $longitude;
    /** @var LocationInterface */
    protected $location;
    /**
     * @ORM\ManyToOne(targetEntity=Inwebo\Bundle\IpStackBundle\Entity\Timezone", inversedBy="id")
     *
     * @Groups({"timezone"})
     */
    protected $timeZone;
    /**
     * @ORM\ManyToMany(targetEntity=Inwebo\Bundle\IpStackBundle\Entity\Timezone", inversedBy="id")
     *
     * @Groups({"currency"})
     */
    protected $currency;
    /**
     * @Groups({"connection"})
     */
    protected $connection;
    /**
     * @Groups({"security"})
     */
    protected $security;
}
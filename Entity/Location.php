<?php
/**
 * Created by PhpStorm.
 * User: inwebo
 * Date: 25/11/18
 * Time: 14:59
 */

namespace Inwebo\Bundle\IpStackBundle\Entity;

use Inwebo\Component\IpStack\Model\Location as BaseLocation;

/**
 * @ORM\Entity(repositoryClass="Inwebo\Bundle\IpStackBundle\Entity\LocationRepository")
 */
class Location extends BaseLocation
{
    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $geonameId;
    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $capital;
    /** @var Languages */
    protected $languages;
    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $countryFlag;
    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $countryFlagEmoji;
    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $countryFlagEmojiUnicode;
    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $callingCode;
    /**
     * @ORM\Column(type="boolean")
     */
    protected $isEu;
}
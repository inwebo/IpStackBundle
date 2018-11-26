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
 *
 * @ORM\Table(name="ipstack__location")
 */
class Location extends BaseLocation
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $geonameId;
    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $capital;

    /**
     * @ORM\ManyToMany(targetEntity=Inwebo\Bundle\IpStackBundle\Entity\Language")
     */
    protected $languages;
    /**
     * @ORM\Column(type="string", length=4)
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
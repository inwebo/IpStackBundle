<?php
/**
 * Created by PhpStorm.
 * User: inwebo
 * Date: 25/11/18
 * Time: 15:43
 */

namespace Inwebo\Bundle\IpStackBundle\Entity;

use Inwebo\Component\IpStack\Model\TimeZone as BaseTimeZone;

/**
 * @ORM\Entity(repositoryClass="Inwebo\Bundle\IpStackBundle\Entity\SecurityRepository")
 *
 * @ORM\Table(name="ipstack__timezone")
 */
class Timezone extends BaseTimeZone
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     * @ORM\OneToMany(targetEntity="Inwebo\Bundle\IpStackBundle\Entity\Response", mappedBy="timezone")
     */
    protected $id;
    /**
     * @ORM\Column(type="integer", name="gmt_offset")
     */
    protected $gmtOffset;
    /**
     * @Assert\Type("boolean")
     */
    protected $code;
    /**
     * @ORM\Column(type="boolean")
     * @Assert\Type("boolean")
     */
    protected $isDayLightSaving;
}
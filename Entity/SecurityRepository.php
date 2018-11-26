<?php
/**
 * Created by PhpStorm.
 * User: inwebo
 * Date: 25/11/18
 * Time: 16:23
 */

namespace Inwebo\Bundle\IpStackBundle\Entity;


use Doctrine\ORM\EntityRepository;

class SecurityRepository extends EntityRepository
{
    /** @var string */
    protected $id;
    /** @var string */
    protected $currentTime;
    /** @var int */
    protected $gmtOffset;
    /** @var string */
    protected $code;
    /** @var bool */
    protected $isDayLightSaving;

}
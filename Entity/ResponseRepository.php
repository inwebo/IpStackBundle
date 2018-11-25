<?php
/**
 * Created by PhpStorm.
 * User: inwebo
 * Date: 25/11/18
 * Time: 12:57
 */

namespace Inwebo\Bundle\IpStackBundle\Entity;


use Doctrine\ORM\EntityRepository;

class ResponseRepository extends EntityRepository
{
    /** @var string */
    protected $geonameId;
    /** @var string */
    protected $capital;
    /** @var Languages */
    protected $languages;
    /** @var string */
    protected $countryFlag;
    /** @var string */
    protected $countryFlagEmoji;
    /** @var string */
    protected $countryFlagEmojiUnicode;
    /** @var int */
    protected $callingCode;
    /** @var bool */
    protected $isEu;
}
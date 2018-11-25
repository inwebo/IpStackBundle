<?php
/**
 * Created by PhpStorm.
 * User: inwebo
 * Date: 25/11/18
 * Time: 15:45
 */

namespace Inwebo\Bundle\IpStackBundle\Entity;

use Inwebo\Component\IpStack\Model\Currency as BaseCurrency;

/**
 * @ORM\Entity(repositoryClass="Inwebo\Bundle\IpStackBundle\Entity\CurrencyRepository")
 */
class Currency extends BaseCurrency
{
    /**
     * @ORM\Column(type="string", length=3)
     */
    protected $code;
    /**
     * @ORM\Column(type="string", length=16)
     */
    protected $name;
    /**
     * @ORM\Column(type="string", length=16)
     */
    protected $plural;
    /**
     * @ORM\Column(type="string", length=16)
     */
    protected $symbol;
    /**
     * @ORM\Column(type="string", length=16)
     */
    protected $symbolNative;
}
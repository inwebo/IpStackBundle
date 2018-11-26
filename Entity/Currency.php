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
 *
 * @ORM\Table(name="ipstack__currency")
 */
class Currency extends BaseCurrency
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=3)
     *
     * @Assert\Type("string")
     * @Assert\Length(
     *     min=3,
     *     max=3
     * )
     */
    protected $code;
    /**
     * @ORM\Column(type="string", length=16)
     * @Assert\Type("string")
     */
    protected $name;
    /**
     * @ORM\Column(type="string", length=16)
     * @Assert\Type("string")
     */
    protected $plural;
    /**
     * @ORM\Column(type="string", length=16)
     * @Assert\Type("string")
     */
    protected $symbol;
    /**
     * @ORM\Column(type="string", length=16)
     * @Assert\Type("string")
     */
    protected $symbolNative;
}

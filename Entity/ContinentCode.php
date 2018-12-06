<?php

namespace Inwebo\Bundle\IpStackBundle\Entity;

use Inwebo\Component\IpStack\Model\ContinentCode as BaseContinentCode;

class ContinentCode extends BaseContinentCode
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=2)
     * @Assert\NotBlank
     * @Assert\Length(
     *     min = 2,
     *     max = 2
     * )
     */
    protected $code;
    /**
     * @ORM\Column(type="string", length=15)
     * @Assert\NotBlank
     * @Assert\Length(
     *     min = 4,
     *     max = 12
     * )
     */
    protected $name;

}
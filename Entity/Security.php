<?php
/**
 * Created by PhpStorm.
 * User: inwebo
 * Date: 25/11/18
 * Time: 16:23
 */

namespace Inwebo\Bundle\IpStackBundle\Entity;

use Inwebo\Component\IpStack\Model\Security as BaseSecurity;

/**
 * @ORM\Entity(repositoryClass="Inwebo\Bundle\IpStackBundle\Entity\SecurityRepository")
 *
 * @ORM\Table(name="ipstack__security")
 */
class Security extends BaseSecurity
{
    /**
     * @ORM\Column(type="bool")
     */
    protected $isProxy;
    /** @var int|null */
    protected $proxyType;
    /**
     * @ORM\Column(type="bool")
     */
    protected $isCrawler;
    /** @var string|null */
    protected $crawlerName;
    /** @var string|null */
    protected $crawlerType;
    /**
     * @ORM\Column(type="bool")
     */
    protected $isTor;
    /** @var string */
    protected $threatLevel;
    /** @var string|null */
    protected $threatTypes;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }
}
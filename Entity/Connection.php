<?php
/**
 * Created by PhpStorm.
 * User: inwebo
 * Date: 25/11/18
 * Time: 16:25
 */

namespace Inwebo\Bundle\IpStackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Inwebo\Component\IpStack\Model\Connection as BaseConnection;

/**
 * @ORM\Entity(repositoryClass="Inwebo\Bundle\IpStackBundle\Entity\ConnectionRepository")
 *
 * @ORM\Table(name="ipstack__message")
 */
class Connection extends BaseConnection
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $asn;
    /**
     * @ORM\Column(type="string", length=32)
     */
    protected $isp;
}
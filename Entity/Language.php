<?php
/**
 * Created by PhpStorm.
 * User: inwebo
 * Date: 25/11/18
 * Time: 15:02
 */

namespace Inwebo\Bundle\IpStackBundle\Entity;

use Inwebo\Component\IpStack\Model\Language as BaseLanguage;

/**
 * @ORM\Entity(repositoryClass="Inwebo\Bundle\IpStackBundle\Entity\LanguageRepository")
 *
 * @ORM\Table(name="ipstack__language")
 */
class Language extends BaseLanguage
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=2)
     *
     */
    protected $code;
    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $name;
    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $native;
}

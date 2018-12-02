<?php
namespace Inwebo\Bundle\IpStackBundle\Entity;

use Inwebo\Component\IpStack\Model\Language as BaseLanguage;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     *     min = 3,
     *     max = 22
     * )
     */
    protected $name;
    /**
     * @ORM\Column(type="string", length=15)
     * @Assert\NotBlank
     * @Assert\Length(
     *     min = 3,
     *     max = 31
     * )
     */
    protected $native;
}

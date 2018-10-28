<?php
/**
 * Created by PhpStorm.
 * User: inwebo
 * Date: 28/10/18
 * Time: 19:06
 */

namespace Inwebo\Bundle\IpStackBundle\Model;


class Languages
{
    /** @var Language[] */
    protected $languages;

    /**
     * @return Language[]
     */
    public function getLanguages(): array
    {
        return $this->languages;
    }

    /**
     * @param Language[] $languages
     */
    public function setLanguages(array $languages): void
    {
        $this->languages = $languages;
    }

    protected function __construct()
    {
        $this->languages = [];
    }
}
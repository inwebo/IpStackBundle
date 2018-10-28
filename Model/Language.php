<?php
/**
 * Created by PhpStorm.
 * User: inwebo
 * Date: 28/10/18
 * Time: 19:06
 */

namespace Inwebo\Bundle\IpStackBundle\Model;


class Language
{
    /** @var string */
    protected $code;
    /** @var string */
    protected $name;
    /** @var string */
    protected $native;

    /**
     * Returns the 2-letter language code for the given language.
     *
     * @see https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * Returns the name (in the API request's main language) of the given language. (e.g. Portuguese)
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * 	Returns the native name of the given language. (e.g. Português)
     *
     * @return string
     */
    public function getNative(): string
    {
        return $this->native;
    }

    /**
     * @param string $native
     */
    public function setNative(string $native): void
    {
        $this->native = $native;
    }


}
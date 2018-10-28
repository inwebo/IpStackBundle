<?php
/**
 * Created by PhpStorm.
 * User: inwebo
 * Date: 28/10/18
 * Time: 18:54
 */

namespace Inwebo\Bundle\IpStackBundle\Model;


class Location
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

    /**
     * Returns the unique geoname identifier in accordance with the Geonames Registry.
     *
     * @return string
     */
    public function getGeonameId(): string
    {
        return $this->geonameId;
    }

    /**
     * @param string $geonameId
     */
    public function setGeonameId(string $geonameId): void
    {
        $this->geonameId = $geonameId;
    }

    /**
     * Returns the capital city of the country associated with the IP.
     *
     * @return string
     */
    public function getCapital(): string
    {
        return $this->capital;
    }

    /**
     * @param string $capital
     */
    public function setCapital(string $capital): void
    {
        $this->capital = $capital;
    }

    /**
     * @return Languages
     */
    public function getLanguages(): Languages
    {
        return $this->languages;
    }

    public function addLanguage(Language $language)
    {
        $this->languages->getLanguages()[] = $language;
    }

    /**
     * @param Languages $languages
     */
    public function setLanguages(Languages $languages): void
    {
        $this->languages = $languages;
    }

    /**
     * Returns an HTTP URL leading to an SVG-flag icon for the country associated with the IP.
     *
     * @return string
     */
    public function getCountryFlag(): string
    {
        return $this->countryFlag;
    }

    /**
     * @param string $countryFlag
     */
    public function setCountryFlag(string $countryFlag): void
    {
        $this->countryFlag = $countryFlag;
    }

    /**
     * Returns the emoji icon for the flag of the country associated with the IP.
     *
     * @return string
     */
    public function getCountryFlagEmoji(): string
    {
        return $this->countryFlagEmoji;
    }

    /**
     * @param string $countryFlagEmoji
     */
    public function setCountryFlagEmoji(string $countryFlagEmoji): void
    {
        $this->countryFlagEmoji = $countryFlagEmoji;
    }

    /**
     * Returns the unicode value of the emoji icon for the flag of the country associated with the IP. (e.g. U+1F1F5 U+1F1F9 for the Portuguese flag)
     *
     * @return string
     */
    public function getCountryFlagEmojiUnicode(): string
    {
        return $this->countryFlagEmojiUnicode;
    }

    /**
     * @param string $countryFlagEmojiUnicode
     */
    public function setCountryFlagEmojiUnicode(string $countryFlagEmojiUnicode): void
    {
        $this->countryFlagEmojiUnicode = $countryFlagEmojiUnicode;
    }

    /**
     * 	Returns the calling/dial code of the country associated with the IP. (e.g. 351) for Portugal.
     *
     * @return int
     */
    public function getCallingCode(): int
    {
        return $this->callingCode;
    }

    /**
     * @param int $callingCode
     */
    public function setCallingCode(int $callingCode): void
    {
        $this->callingCode = $callingCode;
    }

    /**
     * Returns true or false depending on whether or not the county associated with the IP is in the European Union.
     *
     * @return bool
     */
    public function isEu(): bool
    {
        return $this->isEu;
    }

    /**
     * @param bool $isEu
     */
    public function setIsEu(bool $isEu): void
    {
        $this->isEu = $isEu;
    }



    public function __construct()
    {
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: inwebo
 * Date: 28/10/18
 * Time: 18:54
 */

namespace Inwebo\Bundle\IpStackBundle\Model;


class TimeZone
{
    /** @var string */
    protected $id;
    /** @var string */
    protected $currentTime;
    /** @var int */
    protected $gmtOffset;
    /** @var string */
    protected $code;
    /** @var bool */
    protected $isDayLightSaving;

    /**
     * Returns the ID of the time zone associated with the IP. (e.g. America/Los_Angeles for PST)
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns the current date and time in the location associated with the IP. (e.g. 2018-03-29T22:31:27-07:00)
     *
     * @return string
     */
    public function getCurrentTime(): string
    {
        return $this->currentTime;
    }

    /**
     * @param string $currentTime
     */
    public function setCurrentTime(string $currentTime): void
    {
        $this->currentTime = $currentTime;
    }

    /**
     * Returns the GMT offset of the given time zone in seconds. (e.g. -25200 for PST's -7h GMT offset)
     *
     * @return int
     */
    public function getGmtOffset(): int
    {
        return $this->gmtOffset;
    }

    /**
     * @param int $gmtOffset
     */
    public function setGmtOffset(int $gmtOffset): void
    {
        $this->gmtOffset = $gmtOffset;
    }

    /**
     * Returns the universal code of the given time zone.
     *
     * @see https://www.timeanddate.com/time/zones/
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
     * Returns true or false depending on whether or not the given time zone is considered daylight saving time.
     *
     * @return bool
     */
    public function isDayLightSaving(): bool
    {
        return $this->isDayLightSaving;
    }

    /**
     * @param bool $isDayLightSaving
     */
    public function setIsDayLightSaving(bool $isDayLightSaving): void
    {
        $this->isDayLightSaving = $isDayLightSaving;
    }
}
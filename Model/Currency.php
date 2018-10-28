<?php
/**
 * Created by PhpStorm.
 * User: inwebo
 * Date: 28/10/18
 * Time: 18:54
 */

namespace Inwebo\Bundle\IpStackBundle\Model;


class Currency
{
    /** @var string */
    protected $code;
    /** @var string */
    protected $name;
    /** @var string */
    protected $plural;
    /** @var string */
    protected $symbol;
    /** @var string */
    protected $symbolNative;

    /**
     * Returns the 3-letter code of the main currency associated with the IP. Example: USD
     *
     * @see https://www.iban.com/currency-codes
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
     * 	Returns the name of the given currency.
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
     * Returns the plural name of the given currency.
     *
     * @return string
     */
    public function getPlural(): string
    {
        return $this->plural;
    }

    /**
     * @param string $plural
     */
    public function setPlural(string $plural): void
    {
        $this->plural = $plural;
    }

    /**
     * Returns the symbol letter of the given currency.
     *
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     */
    public function setSymbol(string $symbol): void
    {
        $this->symbol = $symbol;
    }

    /**
     * Returns the native symbol letter of the given currency.
     *
     * @return string
     */
    public function getSymbolNative(): string
    {
        return $this->symbolNative;
    }

    /**
     * @param string $symbolNative
     */
    public function setSymbolNative(string $symbolNative): void
    {
        $this->symbolNative = $symbolNative;
    }
}
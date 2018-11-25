<?php

namespace Inwebo\Bundle\IpStackBundle\Model\Exceptions;

use Throwable;

/**
 * Class TooManyIpsException
 */
class TooManyIpsException extends BaseException
{
    /** @var int|null */
    protected $count;

    /**
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * @param int $count
     */
    public function setCount(int $count): void
    {
        $this->count = $count;
    }

    /**
     * @inheritdoc
     */
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct('Too many IPs have been specified for the Bulk Lookup Endpoint. (max. 50)', 302, $previous);
    }

    /**
     * @return string
     */
    final function getTooManyIpsMessage()
    {
        $message = 'Too many IPs have been specified for the Bulk Lookup Endpoint. (max. 50). %s';

        return (is_null($this->getCount())) ?
            sprintf($message, '') :
            sprintf($message, sprintf('Your current usage %s', $this->getCount()));
            ;
    }
}
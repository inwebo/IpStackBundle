<?php

namespace Inwebo\Bundle\IpStackBundle\Model\Exceptions;

use Throwable;

/**
 * Class InvalidJsonPCallbackException
 */
class InvalidJsonPCallbackException extends BaseException
{
    /**
     * @inheritdoc
     */
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct('Invalid jsonp callback', 304, $previous);
    }
}
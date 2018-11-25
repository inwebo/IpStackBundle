<?php

namespace Inwebo\Bundle\IpStackBundle\Model\Exceptions;

use Throwable;

/**
 * Class ApiKeyException
 */
class ApiKeyException extends BaseException
{
    /**
     * @inheritdoc
     */
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct("No API Key was specified or an invalid API Key was specified.", 101, $previous);
    }
}
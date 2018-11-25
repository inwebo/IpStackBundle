<?php

namespace Inwebo\Bundle\IpStackBundle\Model\Exceptions;

use Throwable;

/**
 * Class InvalidFieldsException
 */
class InvalidFieldsException extends BaseException
{
    /**
     * @inheritdoc
     */
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct('One or more invalid fields were specified using the fields parameter', 301, $previous);
    }
}
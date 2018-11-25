<?php

namespace Inwebo\Bundle\IpStackBundle\Model\Exceptions;

use Inwebo\Component\IpStack\Model\IpStack;
use Throwable;

/**
 * Class InvalidApiFunctionException
 */
class InvalidApiFunctionException extends BaseException
{
    /**
     * @inheritdoc
     */
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        $message = 'The requested API endpoint does not exist.';
        
        parent::__construct($message, 103, $previous);
    }
}
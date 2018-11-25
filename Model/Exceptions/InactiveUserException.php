<?php

namespace Inwebo\Bundle\IpStackBundle\Model\Exceptions;

use Throwable;

/**
 * Class InactiveUserException
 */
class InactiveUserException extends BaseException
{
    /**
     * @inheritdoc
     */
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct('The current user account is not active. User will be prompted to get in touch with Customer Support.', 102, $previous);
    }
}
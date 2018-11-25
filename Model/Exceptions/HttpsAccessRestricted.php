<?php

namespace Inwebo\Bundle\IpStackBundle\Model\Exceptions;

use Throwable;

/**
 * Class HttpsAccessRestricted
 */
class HttpsAccessRestricted extends BaseException
{
    /**
     * @inheritdoc
     */
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct('The user\'s current subscription plan does not support HTTPS Encryption.', 105, $previous);
    }
}
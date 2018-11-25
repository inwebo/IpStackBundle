<?php

namespace Inwebo\Bundle\IpStackBundle\Model\Exceptions;

use Throwable;

/**
 * Class BatchNotSupportedOnPlanException
 */
class BatchNotSupportedOnPlanException extends BaseException
{
    /**
     * @inheritdoc
     */
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct('The Bulk Lookup Endpoint is not supported on the current subscription plan', 303, $previous);
    }
}
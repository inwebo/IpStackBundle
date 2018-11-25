<?php

namespace Inwebo\Bundle\IpStackBundle\Model\Exceptions;

use Inwebo\Component\IpStack\Model\IpStack;
use Throwable;

/**
 * Class FunctionAccessRestrictedException
 */
class FunctionAccessRestrictedException extends BaseException
{
    /**
     * @inheritdoc
     */
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct('The current subscription plan does not support this API endpoint.', 105, $previous);
    }

    /**
     * @return string
     */
    public function getEndPointMessage()
    {
        $endPoint = IpStack::END_POINT;
        $message = 'The current subscription plan does not support this API endpoint. %s';

        return (!is_null($endPoint) && !is_string($endPoint)) ? sprintf($message, 'Try : '.$endPoint) : sprintf($message, '');
    }
}
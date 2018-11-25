<?php

namespace Inwebo\Bundle\IpStackBundle\Model\Exceptions;

use Throwable;

/**
 * Class BadFieldsException
 */
class BadFieldsException extends BaseException
{
    /** @var array */
    protected $userFields;
    /** @var array */
    protected $fields;

    /**
     * @inheritdoc
     */
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
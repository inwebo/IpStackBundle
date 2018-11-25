<?php

namespace Inwebo\Bundle\IpStackBundle\Model\Exceptions;

use Throwable;

/**
 * Class UsageLimitReachedException
 */
class UsageLimitReachedException extends BaseException
{
    /**
     * @var int|null
     */
    protected $currentUsage;

    /**
     * @return int|null
     */
    public function getCurrentUsage(): ?int
    {
        return $this->currentUsage;
    }

    /**
     * @param int $currentUsage
     */
    public function setCurrentUsage(int $currentUsage): void
    {
        $this->currentUsage = $currentUsage;
    }

    /**
     * @inheritdoc
     */
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($this->GetMaxMessage(), 104, $previous);
    }

    /**
     * @return string
     */
    final function GetMaxMessage()
    {
        $message = 'The maximum allowed amount of monthly API requests has been reached. %s';

        return (is_null($this->getCurrentUsage())) ?
            sprintf($message, '') :
            sprintf($message, sprintf('Your current usage %s', $this->getCurrentUsage()))
            ;
    }
}
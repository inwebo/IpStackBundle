<?php

namespace Inwebo\Bundle\IpStackBundle\Model\Decorators;

use Inwebo\Component\IpStack\Model\ResponseInterface;

interface IpStackDecoratorInterface
{
    /**
     * @param string $json
     *
     * @return ResponseInterface
     */
    public function convert(string $json);
}
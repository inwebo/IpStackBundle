<?php

namespace Inwebo\Bundle\IpStackBundle\Model\Decorators;

use Inwebo\Component\IpStack\Model\Response;
use Inwebo\Component\IpStack\Model\ResponseInterface;

class IpStackToResponse implements IpStackDecoratorInterface
{
    /**
     * @param string $json
     *
     * @return ResponseInterface
     */
    public function convert(string $json)
    {
        // Mapping

        return new Response($json);
    }
}
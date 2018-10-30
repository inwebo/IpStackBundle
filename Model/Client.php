<?php

namespace Inwebo\Bundle\IpStackBundle\Model;

class Client implements ClientInterface
{
    /**
     * @param string $url
     *
     * @return string
     */
    public function query(string $url)
    {
        $json = file_get_contents($url);

        return $json;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: inwebo
 * Date: 30/10/18
 * Time: 20:54
 */

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
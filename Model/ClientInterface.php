<?php
/**
 * Created by PhpStorm.
 * User: inwebo
 * Date: 30/10/18
 * Time: 22:06
 */

namespace Inwebo\Bundle\IpStackBundle\Model;

interface ClientInterface
{
    /**
     * @param string $url
     *
     * @return string
     */
    public function query(string $url);
}
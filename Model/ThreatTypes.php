<?php
/**
 * Created by PhpStorm.
 * User: inwebo
 * Date: 28/10/18
 * Time: 19:01
 */

namespace Inwebo\Bundle\IpStackBundle\Model;


class ThreatTypes
{
    const TOR = 0;
    const FAKE_CRAWLER = 1;
    const WEB_SCRAPER = 2;
    const ATTACK_SOURCE = 3;
    const ATTACK_SOURCE_HTTP = 3;
    const ATTACK_SOURCE_MAIL = 3;
    const ATTACK_SOURCE_SSH = 3;
}
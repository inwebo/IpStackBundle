<?php
/**
 * Created by PhpStorm.
 * User: inwebo
 * Date: 04/12/18
 * Time: 22:31
 */

namespace Inwebo\Bundle\IpStackBundle\DataFixtures;


use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Inwebo\Component\IpStack\Model\ContinentCode;

class ContinentsCodeFixtures extends Fixture
{
    /**
     * @inheritdoc
     */
    public function load(ObjectManager $manager)
    {
        try {
            $reflectionClass = new \ReflectionClass(ContinentCode::class);
            /** @var array $consts */
            $constants = $reflectionClass->getConstants();

            foreach ($constants as $key => $value) {
                dump($key, $value);
            }
        } catch (\Exception $e) {

        }
    }
}
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
use Inwebo\Component\IpStack\Model\ContinentCodesEnum;

class ContinentsCodeFixtures extends Fixture
{
    /**
     * @inheritdoc
     */
    public function load(ObjectManager $manager)
    {
        try {
            $reflectionClass = new \ReflectionClass(ContinentCodesEnum::class);
            /** @var array $consts */
            $consts = $reflectionClass->getConstants();

            foreach ($consts as $key => $value) {
                
            }
        } catch (\Exception $e) {

        }
    }
}
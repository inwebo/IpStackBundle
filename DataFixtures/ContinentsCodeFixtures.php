<?php

namespace Inwebo\Bundle\IpStackBundle\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

use Inwebo\Bundle\IpStackBundle\Entity\ContinentCode;

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
                $continentCode = new ContinentCode($key, $value);
                $manager->persist($continentCode);
            }

            $manager->flush();

        } catch (\Exception $e) {

        }
    }
}
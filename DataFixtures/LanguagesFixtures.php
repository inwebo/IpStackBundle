<?php
/**
 * Created by PhpStorm.
 * User: inwebo
 * Date: 02/12/18
 * Time: 18:46
 */

namespace Inwebo\Bundle\IpStackBundle\DataFixtures;


use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Finder\Finder;

class LanguagesFixtures extends Fixture
{
    /**
     * @inheritdoc
     */
    public function load(ObjectManager $manager)
    {
        $finder = new Finder();
        $dataFixture = $finder
            ->in(__DIR__)
            ->files()
            ->name('iso-639-1.json');


    }
}
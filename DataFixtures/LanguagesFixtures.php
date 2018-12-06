<?php

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

        foreach ($dataFixture as $item) {
            $jsonStringString = $item->getContents();
            $languagesJSON = json_decode($jsonStringString, true);

            foreach ($languagesJSON as $key => $value) {

                $language = new Language();
                $language->setCode($value['code']);
                $language->setName($value['name']);
                $language->setNative($value['native']);


                $manager->persist($language);
            }

            $manager->flush();

        }

    }
}
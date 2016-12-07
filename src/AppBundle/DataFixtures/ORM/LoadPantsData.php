<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Underware;
use AppBundle\Entity\UnderwareFeature;
use Doctrine\Common\Persistence\ObjectManager;

class LoadPantsData extends LoadData
{
    public function load(ObjectManager $manager)
    {
        for($i = 0; $i < 10; $i++) {
            $feature = new UnderwareFeature();
            $feature
                ->setWoreDuration($i)
            ;

            $underware = new Underware();
            $underware
                ->setName('My Dirty Underware ' . $i)
                ->setDescription('Lorem Ipsum blablabla')
                ->setFeature($feature)
            ;

            $manager->persist($underware);
        }

        $manager->flush();
    }
}
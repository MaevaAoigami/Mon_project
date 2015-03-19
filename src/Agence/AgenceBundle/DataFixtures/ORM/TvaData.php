<?php

namespace Agence\AgenceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Agence\AgenceBundle\Entity\Tva;

class TvaData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $tva1 = new tva();
        $tva1->setMultiplicate('0.833');
        $tva1->setName('TVA 20%');
        $tva1->setValeur('20');
        $manager->persist($tva1);

        $manager->flush();

        $this->addReference('tva1', $tva1);
    }

    public function getOrder()
    {
        return 2;
    }
}
<?php

namespace Agence\AgenceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Utilisateurs\UtilisateursBundle\Entity\Utilisateurs;

class UtilisateursData extends AbstractFixture implements OrderedFixtureInterface, FixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $user1 = new Utilisateurs();
        $user1->setUsername('Louis');
        $user1->setEmail('louis@gmail.com');
        $user1->setEnabled(1);
        $user1->setPassword($this->container->get('security.encoder_factory')->getEncoder($user1)->encodePassword('poupou', $user1->getSalt()));
        $manager->persist($user1);

        $user2 = new Utilisateurs();
        $user2->setUsername('Marco');
        $user2->setEmail('marco@gmail.com');
        $user2->setEnabled(1);
        $user2->setPassword($this->container->get('security.encoder_factory')->getEncoder($user2)->encodePassword('boubou', $user2->getSalt()));
        $manager->persist($user2);

        $user3 = new Utilisateurs();
        $user3->setUsername('Janette');
        $user3->setEmail('janette@gmail.com');
        $user3->setEnabled(1);
        $user3->setPassword($this->container->get('security.encoder_factory')->getEncoder($user3)->encodePassword('palipalou', $user3->getSalt()));
        $manager->persist($user3);

        $user4 = new Utilisateurs();
        $user4->setUsername('Paul');
        $user4->setEmail('paul@gmail.com');
        $user4->setEnabled(1);
        $user4->setPassword($this->container->get('security.encoder_factory')->getEncoder($user4)->encodePassword('balou', $user4->getSalt()));
        $manager->persist($user4);

        $user5 = new Utilisateurs();
        $user5->setUsername('Marie');
        $user5->setEmail('marie@gmail.com');
        $user5->setEnabled(1);
        $user5->setPassword($this->container->get('security.encoder_factory')->getEncoder($user5)->encodePassword('madat', $user5->getSalt()));
        $manager->persist($user5);

        $manager->flush();

        $this->addReference('user1', $user1);
        $this->addReference('user2', $user2);
        $this->addReference('user3', $user3);
        $this->addReference('user4', $user4);
        $this->addReference('user5', $user5);
    }

    public function getOrder()
    {
        return 4;
    }
}
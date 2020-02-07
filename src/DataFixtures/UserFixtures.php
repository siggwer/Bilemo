<?php

namespace App\DataFixtures;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;

/**
 * Class UserFixtures
 *
 * @package App\DataFixtures
 */
class UserFixtures extends Fixture implements DependentFixtureInterface
{
    /**
     * @inheritDoc
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 10; $i++){
            $user = new User();
            $user->setName('username' . $i);
            $user->setEmail('email' . $i++ . '@email.fr');
            $user->setClient($this->getReference(ClientFixtures::CLIENT_REFERENCE));
            $manager->persist($user);
        }

        $manager->flush();
    }

    /**
     * @return array
     */
    public function getDependencies()
    {
        return array(
            ClientFixtures::class,
        );
    }
}
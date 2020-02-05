<?php

namespace App\DataFixtures;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use App\Entity\User;
use Exception;

/**
 * Class ProductFixtures
 *
 * @package App\DataFixtures
 */
class UserFixtures extends Fixture implements DependentFixtureInterface
{
    /**
     * @param ObjectManager $manager
     *
     * @throws Exception
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 10; $i++){
            $user = new User();
            $user->setName('username' . $i);
            $user->setEmail('email@' . $i);
            $user->setClient($this->getReference(ClientFixtures::CLIENT_REFERENCE));
            $manager->persist($user);
        }

        $manager->flush();
    }

    /**
     * @inheritDoc
     */
    public function getDependencies()
    {
        return array(
           ClientFixtures::class
        );
    }
}

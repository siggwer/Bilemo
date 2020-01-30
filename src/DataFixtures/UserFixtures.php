<?php

namespace App\DataFixtures;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use App\Entity\Client;
use App\Entity\User;
use Exception;

/**
 * Class ProductFixtures
 *
 * @package App\DataFixtures
 */
class UserFixtures extends Fixture
{
    /**
     * @param ObjectManager $manager
     * @throws Exception
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 100; $i++){
        $user = new User();
        $user->setName('username' . $i);
        $user->setEmail('email@' . $i);
        $user->setClient($this->getReference(ClientFixtures::CLIENT_REFERENCE));
        $manager->persist($user);
        }

        $manager->flush();
    }
}

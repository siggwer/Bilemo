<?php

namespace App\DataFixtures;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use App\Entity\Client;
use Exception;

/**
 * Class ClientFixturesFixtures
 *
 * @package App\DataFixtures
 */
class ClientFixtures extends Fixture
{
    const CLIENT_REFERENCE = 'client';

    /**
     * @param ObjectManager $manager
     *
     * @throws Exception
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 100; $i++){
        $client = new Client();
        $client->setEmail('email@' . $i);
        $client->setPassword('password');
        $this->setReference(self::CLIENT_REFERENCE, $client);
        $manager->persist($client);
        }

        $manager->flush();
    }
}

<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Client;
use Exception;

/**
 * Class ClientFixtures
 *
 * @package App\DataFixtures
 */
class ClientFixtures extends Fixture
{
    public const CLIENT_REFERENCE = 'client';

    /**
     * @param ObjectManager $manager
     *
     * @throws Exception
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 10; $i++) {
            $client = new Client();
            $client->setEmail('email' . $i++ . '@email.fr');
            $client->setPassword('password');
            $manager->persist($client);
        }

        $manager->flush();

        $this->setReference(self::CLIENT_REFERENCE, $client);
    }
}
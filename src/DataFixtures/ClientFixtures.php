<?php

namespace App\DataFixtures;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Client;
use DateTimeImmutable;
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
     * @var UserPasswordEncoderInterface
     */
    private $passwordEncoder;

    /**
     * ClientFixtures constructor.
     *
     * @param UserPasswordEncoderInterface $passwordEncoder
     */
    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    /**
     * @param ObjectManager $manager
     *
     * @throws Exception
     */
    public function load(ObjectManager $manager)
    {
            for ($i = 1; $i <= 10; $i++) {
                $client = new Client();
                $client->setEmail('email' . $i . '@email.fr');
                #$client->setPassword('password');
                $client->setPassword($this->passwordEncoder->encodePassword(
                    $client,
                    'password'
                ));
                $client->setCreatedAt(new DateTimeImmutable());
                $client->setUpdatedAt(new DateTimeImmutable());
                $client->setRoles(('ROLE_USER'));
                #$this->setReference(self::CLIENT_REFERENCE, (object)$client->getId('id'));

                $manager->persist($client);
                $this->setReference(self::CLIENT_REFERENCE . '_' . $i, $client);
            }

        $manager->flush();
    }
}
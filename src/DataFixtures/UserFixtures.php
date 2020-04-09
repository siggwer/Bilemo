<?php

namespace App\DataFixtures;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use DateTimeImmutable;
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
        for ($j = 1; $j <= 10; $j++) {
            for ($i = 1; $i <= 25; $i++) {
                $user = new User();
                $user->setName('username' . $i);
                $user->setEmail('email' . (($j - 1)* 25 + $i). '@email.fr');
                $user->setClient($this->getReference(ClientFixtures::CLIENT_REFERENCE . '_'. $j));
                $user->setCreatedAt(new DateTimeImmutable());
                $user->setUpdatedAt(new DateTimeImmutable());
                $manager->persist($user);
            }
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

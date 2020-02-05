<?php

namespace App\DataFixtures;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use App\Entity\Brand;

/**
 * Class BrandFixtures
 *
 * @package App\DataFixtures
 */
class BrandFixtures extends Fixture
{
    public const BRAND_REFERENCE = 'brandname';

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 10; $i++){
            $brand = new Brand();
            $brand ->setName('brand' .$i);
            $this->addReference(self::BRAND_REFERENCE . $i);
            $manager->persist($brand);
        }

        $manager->flush();
    }
}

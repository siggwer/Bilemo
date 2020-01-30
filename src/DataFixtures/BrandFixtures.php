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
    const BRAND_REFERENCE = 'brandname';

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 100; $i++){
        $brand = new Brand();
        $brand ->setName('brand' .$i);
        $this->setReference(self::BRAND_REFERENCE, (object)$brand);
        $manager->persist($brand);
        }

        $manager->flush();
    }
}

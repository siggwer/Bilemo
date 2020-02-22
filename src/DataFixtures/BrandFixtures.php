<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
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
     * @inheritDoc
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 10; $i++){
            $brand = new Brand();
            $brand ->setName('brand' . $i);
            $this->setReference(self::BRAND_REFERENCE . '_' . $i, $brand);
            $manager->persist($brand);
        }

        $manager->flush();
    }
}
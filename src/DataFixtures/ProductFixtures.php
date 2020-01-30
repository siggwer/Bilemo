<?php

namespace App\DataFixtures;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use App\DataFixtures\BrandFixtures;
use App\Entity\Product;


/**
 * Class ProductFixtures
 *
 * @package App\DataFixtures
 */
class ProductFixtures extends Fixture
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 100; $i++){
        $product = new Product();
        $product->setName('phone n' . $i);
        $product->setReference('ref' . $i);
        $product->setDescription('phone 1' . $i);
        $product->setBrand($this->getReference(BrandFixtures::BRAND_REFERENCE));
        $product->setprice(random_int(1, 1000));
        $manager->persist($product);
        }

        $manager->flush();
    }

    /**
     * @return array
     */
    public function getDependencies()
    {
        return array(
            BrandFixtures::class,
        );
    }

}

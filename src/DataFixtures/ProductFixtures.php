<?php

namespace App\DataFixtures;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Product;
use Exception;

/**
 * Class ProductFixtures
 *
 * @package App\DataFixtures
 */
class ProductFixtures extends Fixture implements DependentFixtureInterface
{
    /**
     * @inheritDoc
     *
     * @throws Exception
     */
    public function load(ObjectManager $manager)
    {
        for ($j = 1; $j <= 10; $j++){
            for ($i = 1; $i <= 10; $i++){
                $product = new Product();
                $product->setName('phone n' . $i);
                $product->setReference('ref' . $i);
                $product->setDescription('phone 1' . $i);
                $product->setBrand($this->getReference(BrandFixtures::BRAND_REFERENCE . '_' . $j));
                $product->setprice(random_int(1, 1000));
                $manager->persist($product);
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
            BrandFixtures::class,
        );
    }
}

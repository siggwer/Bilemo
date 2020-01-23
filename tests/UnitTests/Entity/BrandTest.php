<?php

namespace App\Tests\UnitTests\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Product;
use App\Entity\Client;
use App\Entity\Brand;
use App\Entity\User;
use Exception;
use ReflectionClass;
use ReflectionException;

/**
 * Class BrandTest
 *
 * @package App\Tests\UnitTests\Entity
 */
class BrandTest extends TestCase
{
    /**
     * @var
     */
    private $brand;

    /**
     * @var
     */
    private $client;

    /**
     * @var
     */
    private $product;

    /**
     * @var
     */
    private $user;

    /**
     * @throws Exception
     */
    public function setUp() : void
    {
        $this->brand = new Brand();
        $this->client = new Client();
        $this->product = new Product();
        $this->user = new User();
    }

    /**
     *
     */
    public function testGetId()
    {
        $brand = new Brand();
        $this->assertNull($brand->getId());
        try {
            $reflecion = new ReflectionClass($brand);
        } catch (ReflectionException $e) {
        }
        try {
            $property = $reflecion->getProperty('id');
        } catch (ReflectionException $e) {
        }
        $property->setAccessible(true);
        $property->setValue($brand, '1');
        $this->assertEquals(1, $brand->getId());
    }

    /**
     *
     */
    public function testGetName()
    {
        $this->brand->setName('test');
        $result = $this->brand->getName();
        $this->assertSame('test', $result);
    }

    /**
     *
     */
    public function testGetBrand()
    {
        $product = new Product();
        $this->brand->setProduct($product);
        $result = $this->brand->getProduct();
        $this->assertEquals($product, $result);
    }
}
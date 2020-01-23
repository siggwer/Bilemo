<?php

namespace App\Tests\UnitTests\Entity;

use PHPUnit\Framework\TestCase;
use ReflectionException;
use App\Entity\Product;
use App\Entity\Client;
use App\Entity\Brand;
use App\Entity\User;
use ReflectionClass;

/**
 * Class ProductTest
 *
 * @package App\Tests\UnitTests\Entity
 */
class ProductTest extends TestCase
{
    /**
     * @var Product
     */
    private $product;

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
    private $user;

    /**
     *
     */
    public function setUp() : void
    {
        $this->product = new Product();
        $this->brand = new Brand();
        $this->client = new Client();
        $this->user = new User();
    }

    /**
     *
     */
    public function testGetId()
    {
        $product = new Product();
        $this->assertNull($product->getId());
        try {
            $reflecion = new ReflectionClass($product);
        } catch (ReflectionException $e) {
        }
        try {
            $property = $reflecion->getProperty('id');
        } catch (ReflectionException $e) {
        }
        $property->setAccessible(true);
        $property->setValue($product, '1');
        $this->assertEquals(1, $product->getId());
    }

    /**
     *
     */
    public function testGetName()
    {
        $this->product->setName('test');
        $result = $this->product->getName();
        $this->assertSame('test', $result);
    }

    /**
     * 
     */
    public function testGetNameIfIsNull()
    {
        $this->product->setName(null);
        $this->assertNull($this->product->getReference());
    }

    /**
     *
     */
    public function testGetReference()
    {
        $this->product->setReference('test');
        $result = $this->product->getReference();
        $this->assertSame('test', $result);
    }

    /**
     *
     */
    public function testGetReferenceIfIsNull()
    {
        $this->product->setReference(null);
        $this->assertNull($this->product->getReference());
    }

    /**
     *
     */
    public function testGetBrand()
    {
        $this->product->setBrand('test');
        $result = $this->product->getBrand();
        $this->assertSame('test', $result);

    }

    /**
     *
     */
    public function testGetBrandIfIsNull()
    {
        $this->product->setBrand(null);
        $this->assertNull($this->product->getBrand());
    }

    /**
     *
     */
    public function testGetDescription()
    {
        $this->product->setDescription('test');
        $result = $this->product->getDescription();
        $this->assertSame('test', $result);
    }

    /**
     *
     */
    public function testGetDescriptionIfIsNull()
    {
        $this->product->setDescription(null);
        $this->assertNull($this->product->getDescription());
    }

    /**
     *
     */
    public function testGetPrice()
    {
        $this->product->setPrix('99');
        $result = $this->product->getPrix();
        $this->assertEquals('99', $result);
    }

    /**
     *
     */
    public function testGetPriceIfIsNull()
    {
        $this->product->setPrix(null);
        $this->assertNull($this->product->getPrix());
    }
}
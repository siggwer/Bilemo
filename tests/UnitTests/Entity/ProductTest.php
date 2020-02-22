<?php

namespace App\Tests\UnitTests\Entity;

use PHPUnit\Framework\TestCase;
use ReflectionException;
use App\Entity\Product;
use ReflectionClass;
use Exception;

/**
 * Class ProductTest
 *
 * @package App\Tests\UnitTests\Entity
 */
class ProductTest extends TestCase
{
    /**
     * @var
     */
    private $product;

    /**
     * @throws Exception
     */
    public function setUp() : void
    {
        $this->product = new Product();
    }

    /**
     *
     * @throws ReflectionException
     */
    public function testGetId()
    {
        $product = new Product();
        $this->assertNull($product->getId());
        $reflecion = new ReflectionClass($product);
        $property = $reflecion->getProperty('id');
        $property->setAccessible(true);
        $property->setValue($product, 'e36f227c-2946-11e8-b467-0ed5f89f718b');
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
    public function testGetReference()
    {
        $this->product->setReference('test');
        $result = $this->product->getReference();
        $this->assertSame('test', $result);
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
    public function testGetDescription()
    {
        $this->product->setDescription('test');
        $result = $this->product->getDescription();
        $this->assertSame('test', $result);
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
}
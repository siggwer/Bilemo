<?php

namespace App\Tests\UnitTests\Entity;

use PHPUnit\Framework\TestCase;
use ReflectionException;
use App\Entity\Brand;
use ReflectionClass;
use Exception;

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
     * @throws Exception
     */
    public function setUp() : void
    {
        $this->brand = new Brand();
    }

    /**
     *
     * @throws ReflectionException
     */
    public function testGetId()
    {
        $brand = new Brand();
        $this->assertNull($brand->getId());
        $reflecion = new ReflectionClass($brand);
        $property = $reflecion->getProperty('id');
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
}
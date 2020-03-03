<?php

namespace App\Tests\UnitTests\Entity;

use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\UuidFactory;
use ReflectionClass;
use ReflectionException;
use App\Entity\Product;
use Ramsey\Uuid\Uuid;
use App\Entity\Brand;
use Exception;
use Mockery;

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
     * @throws ReflectionException
     * @throws Exception
     */
    public function testGetId(): void
    {
        $stringUuid = '253e0f90-8842-4731-91dd-0191816e6a28';
        $uuid = Uuid::fromString($stringUuid);

        $factoryMock = Mockery::mock(UuidFactory::class . '[uuid4]',
            [
            'uuid4' => $uuid,
            ]
        );

        Uuid::setFactory($factoryMock);

        $this->assertSame($uuid, Uuid::uuid4());
        $this->assertEquals($stringUuid, Uuid::uuid4()->toString());

        $reflecion = new ReflectionClass($this->product);
        $property = $reflecion->getProperty('id');
        $property->setAccessible(true);
        $property->setValue($this->product, $stringUuid);
        $this->assertEquals($stringUuid, $this->product->getId());
    }

    /**
     *
     */
    public function testGetName(): void
    {
        $this->product->setName('test');
        $result = $this->product->getName();
        $this->assertSame('test', $result);
    }

    /**
     *
     */
    public function testGetReference(): void
    {
        $this->product->setReference('test');
        $result = $this->product->getReference();
        $this->assertSame('test', $result);
    }

    /**
     *
     */
    public function testGetBrand(): void
    {
        $brand = new Brand();
        $this->product->setBrand($brand);
        $result = $this->product->getBrand();
        $this->assertSame($brand, $result);
    }

    /**
     *
     */
    public function testGetDescription(): void
    {
        $this->product->setDescription('test');
        $result = $this->product->getDescription();
        $this->assertSame('test', $result);
    }

    /**
     *
     */
    public function testGetPrice(): void
    {
        $this->product->setPrice('99');
        $result = $this->product->getPrice();
        $this->assertEquals('99', $result);
    }
}
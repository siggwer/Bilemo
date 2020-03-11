<?php

namespace App\Tests\UnitTests\Entity;

use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\UuidFactory;
use ReflectionException;
use App\Entity\Brand;
use Ramsey\Uuid\Uuid;
use ReflectionClass;
use Exception;
use Mockery;

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
     * @throws ReflectionException
     * @throws Exception
     */
    public function testGetId(): void
    {
        $stringUuid = '253e0f90-8842-4731-91dd-0191816e6a28';
        $uuid = Uuid::fromString($stringUuid);

        $factoryMock = Mockery::mock(
            UuidFactory::class . '[uuid4]', [
            'uuid4' => $uuid,
            ]
        );

        Uuid::setFactory($factoryMock);

        $this->assertSame($uuid, Uuid::uuid4());
        $this->assertEquals($stringUuid, Uuid::uuid4()->toString());

        $reflecion = new ReflectionClass($this->brand);
        $property = $reflecion->getProperty('id');
        $property->setAccessible(true);
        $property->setValue($this->brand, $stringUuid);
        $this->assertEquals($stringUuid, $this->brand->getId());
    }

    /**
     *
     */
    public function testGetName(): void
    {
        $this->brand->setName('test');
        $result = $this->brand->getName();
        $this->assertSame('test', $result);
    }
}

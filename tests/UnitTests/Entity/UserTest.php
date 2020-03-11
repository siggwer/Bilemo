<?php

namespace App\Tests\UnitTests\Entity;

use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\UuidFactory;
use ReflectionException;
use DateTimeImmutable;
use App\Entity\Client;
use Ramsey\Uuid\Uuid;
use App\Entity\User;
use ReflectionClass;
use Exception;
use Mockery;

/**
 * Class userTest
 *
 * @package App\Tests\UnitTests\Entity
 */
class UserTest extends TestCase
{
    /**
     * @var
     */
    private $user;

    /**
     * @var DateTimeImmutable
     */
    private $createdAt;

    /**
     * @var DateTimeImmutable
     */
    private $updatedAt;

    /**
     * @throws Exception
     */
    public function setUp() : void
    {
        $this->user = new User();
    }

    public function initTest(): void
    {

    }

    /**
     *
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

        $reflecion = new ReflectionClass($this->user);
        $property = $reflecion->getProperty('id');
        $property->setAccessible(true);
        $property->setValue($this->user, $stringUuid);
        $this->assertEquals($stringUuid, $this->user->getId());
    }

    /**
     *
     */
    public function testGetName(): void
    {
        $this->user->setName('test');
        $result = $this->user->getName();
        $this->assertSame('test', $result);
    }

    /**
     *
     */
    public function testGetEmail(): void
    {
        $this->user->setEmail('test@yopmail.com');
        $result = $this->user->getEmail();
        $this->assertEquals('test@yopmail.com', $result);
    }

    /**
     * @throws Exception
     */
    public function testGetCreatedAt(): void
    {
        $this->user->setCreatedAt(new DateTimeImmutable());
        $result = $this->user->getCreatedAt();
        $this->assertInstanceOf(DateTimeImmutable::class, $result);
    }

    /**
     * @throws Exception
     */
    public function testGetUpdatedAt(): void
    {
        $this->user->setUpdatedAt(new DateTimeImmutable());
        $result = $this->user->getUpdatedAt();
        $this->assertInstanceOf(DateTimeImmutable::class, $result);
    }

    /**
     *
     */
    public function testGetClient(): void
    {
        $client = new Client();
        $this->user->setClient($client);
        $result = $this->user->getClient();
        $this->assertEquals($client, $result);
    }
}

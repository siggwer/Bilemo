<?php

namespace App\Tests\UnitTests\Entity;

use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\UuidFactory;
use ReflectionException;
use App\Entity\Client;
use DateTimeImmutable;
use Ramsey\Uuid\Uuid;
use ReflectionClass;
use Exception;
use Mockery;

/**
 * Class ClientTest
 *
 * @package App\Tests\UnitTests\Entity
 */
class ClientTest extends TestCase
{
    /**
     * @var
     */
    private $client;

    /**
     * @throws Exception
     */
    public function setUp() : void
    {
        $this->client = new Client(
            'name',
            'email',
            'password'
        );
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

        $reflecion = new ReflectionClass($this->client);
        $property = $reflecion->getProperty('id');
        $property->setAccessible(true);
        $property->setValue($this->client, $stringUuid);
        $this->assertEquals($stringUuid, $this->client->getId());
    }

    /**
     *
     */
    public function testGetEmail(): void
    {
        $this->client->setEmail('test@yopmail.com');
        $result = $this->client->getEmail();
        $this->assertEquals('test@yopmail.com', $result);
    }

    /**
     * 
     */
    public function testGetPassword(): void
    {
        $this->client->setPassword('sfJDLKSmdlfsmdlfjlmskDFLMsdjflmSDFLMlm');
        $result = $this->client->getPassword();
        $this->assertEquals('sfJDLKSmdlfsmdlfjlmskDFLMsdjflmSDFLMlm', $result);
    }

    /**
     *
     */
    public function testGetPlainPassword(): void
    {
        $this->client->setPlainPassword('password');
        $result = $this->client->getPlainPassword();
        $this->assertEquals('password', $result);
    }

    /**
     * @throws Exception
     */
    public function testGetCreatedAt(): void
    {
        $this->client->setCreatedAt(new DateTimeImmutable());
        $result = $this->client->getCreatedAt();
        $this->assertInstanceOf(DateTimeImmutable::class, $result);
    }

    /**
     * @throws Exception
     */
    public function testGetUpdatedAt(): void
    {
        $this->client->setUpdatedAt(new DateTimeImmutable());
        $result = $this->client->getUpdatedAt();
        $this->assertInstanceOf(DateTimeImmutable::class, $result);
    }

    /**
     *
     */
    public function testGetRoles(): void
    {
        $this->client->setRoles('ROLE_USER');
        $this->assertEquals(['ROLE_USER'], $this->client->getRoles());
    }

    /**
     *
     */
    public function testGetUsernameTest(): void
    {
        $this->client->setEmail('test@yopmail.com');
        $this->assertEquals('test@yopmail.com', $this->client->getUsername());
    }
}

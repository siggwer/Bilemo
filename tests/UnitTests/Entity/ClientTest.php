<?php

namespace App\Tests\UnitTests\Entity;

use PHPUnit\Framework\TestCase;
use ReflectionException;
use DateTimeImmutable;
use App\Entity\Client;
use ReflectionClass;
use Exception;

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
        $this->client = new Client();
    }

    /**
     *
     * @throws ReflectionException
     */
    public function testGetId()
    {
        $client = new Client();
        $this->assertNull($client->getId());
        $reflecion = new ReflectionClass($client);
        $property = $reflecion->getProperty('id');
        $property->setAccessible(true);
        $property->setValue($client, '1');
        $this->assertEquals(1, $client->getId());
    }

    /**
     *
     */
    public function testGetEmail()
    {
        $this->client->setEmail('test@yopmail.com');
        $result = $this->client->getEmail();
        $this->assertEquals('test@yopmail.com', $result);
    }

    /**
     *
     */
    public function testGetPlainPassword()
    {
        $this->client->setPlainPassword('password');
        $result = $this->client->getPlainPassword();
        $this->assertEquals('password', $result);
    }

    /**
     * @throws Exception
     */
    public function testGetCreatedAt()
    {
        $this->client->setCreatedAt(new DateTimeImmutable());
        $result = $this->client->getCreatedAt();
        $this->assertInstanceOf(DateTimeImmutable::class, $result);
    }

    /**
     * @throws Exception
     */
    public function testGetUpdatedAt()
    {
        $this->client->setUpdatedAt(new DateTimeImmutable());
        $result = $this->client->getUpdatedAt();
        $this->assertInstanceOf(DateTimeImmutable::class, $result);
    }
}
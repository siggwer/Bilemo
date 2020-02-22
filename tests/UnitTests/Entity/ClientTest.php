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
        $this->client = new Client(
            'name',
            'email',
        'password'
        )
        ;
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
        $property->setValue($client, 'e36f227c-2946-11e8-b467-0ed5f89f718b');
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
    public function testGetPassword()
    {
        $this->client->setPlainPassword('password');
        $result = $this->client->getPlainPassword();
        $this->assertEquals('password', $result);
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
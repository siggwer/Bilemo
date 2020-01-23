<?php

namespace App\Tests\UnitTests\Entity;

use PHPUnit\Framework\TestCase;
use ReflectionException;
use App\Entity\Product;
use DateTimeImmutable;
use App\Entity\Client;
use App\Entity\Brand;
use App\Entity\User;
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
     * @var
     */
    private $brand;

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
        $this->client = new Client();
        $this->brand = new Brand();
        $this->product = new Product();
        $this->user = new User();
    }

    /**
     *
     */
    public function testGetId()
    {
        $client = new Client();
        $this->assertNull($client->getId());
        try {
            $reflecion = new ReflectionClass($client);
        } catch (ReflectionException $e) {
        }
        try {
            $property = $reflecion->getProperty('id');
        } catch (ReflectionException $e) {
        }
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

    /**
     *
     */
    public function testGetUser()
    {
        $this->client->setUser('test');
        $result = $this->client->getUser();
        $this->assertSame('test', $result);
    }
}
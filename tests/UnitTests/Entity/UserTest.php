<?php

namespace App\Tests\UnitTests\Entity;

use PHPUnit\Framework\TestCase;
use ReflectionException;
use App\Entity\Product;
use DateTimeImmutable;
use App\Entity\Client;
use App\Entity\Brand;
use App\Entity\user;
use ReflectionClass;
use Exception;

/**
 * Class userTest
 *
 * @package App\Tests\UnitTests\Entity
 */
class userTest extends TestCase
{
    /**
     * @var
     */
    private $user;

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
    private $product;

    /**
     * @throws Exception
     */
    public function setUp() : void
    {
        $this->user = new User();
        $this->client = new Client();
        $this->brand = new Brand();
        $this->product = new Product();
    }

    /**
     *
     */
    public function testGetId()
    {
        $user = new User();
        $this->assertNull($user->getId());
        try {
            $reflecion = new ReflectionClass($user);
        } catch (ReflectionException $e) {
        }
        try {
            $property = $reflecion->getProperty('id');
        } catch (ReflectionException $e) {
        }
        $property->setAccessible(true);
        $property->setValue($user, '1');
        $this->assertEquals(1, $user->getId());
    }

    /**
     *
     */
    public function testGetName()
    {
        $this->user->setName('test');
        $result = $this->user->getName();
        $this->assertSame('test', $result);
    }

    /**
     *
     */
    public function testGetEmail()
    {
        $this->user->setEmail('test@yopmail.com');
        $result = $this->user->getEmail();
        $this->assertEquals('test@yopmail.com', $result);
    }

    /**
     * @throws Exception
     */
    public function testGetCreatedAt()
    {
        $this->user->setCreatedAt(new DateTimeImmutable());
        $result = $this->user->getCreatedAt();
        $this->assertInstanceOf(DateTimeImmutable::class, $result);
    }

    /**
     * @throws Exception
     */
    public function testGetUpdatedAt()
    {
        $this->user->setUpdatedAt(new DateTimeImmutable());
        $result = $this->user->getUpdatedAt();
        $this->assertInstanceOf(DateTimeImmutable::class, $result);
    }

    /**
     *
     */
    public function testGetClient()
    {
        $client = new Client();
        $this->user->setClient($client);
        $result = $this->user->getClient();
        $this->assertEquals($client, $result);
    }
}
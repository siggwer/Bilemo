<?php

namespace App\Tests\UnitTests\Entity;

use PHPUnit\Framework\TestCase;
use ReflectionException;
use DateTimeImmutable;
use App\Entity\Client;
use App\Entity\User;
use ReflectionClass;
use Exception;

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
     * @throws Exception
     */
    public function setUp() : void
    {
        $this->user = new User();
    }

    /**
     *
     * @throws ReflectionException
     */
    public function testGetId()
    {
        $user = new User();
        $this->assertNull($user->getId());
        $reflecion = new ReflectionClass($user);
        $property = $reflecion->getProperty('id');
        $property->setAccessible(true);
        $property->setValue($user, 'e36f227c-2946-11e8-b467-0ed5f89f718b');
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
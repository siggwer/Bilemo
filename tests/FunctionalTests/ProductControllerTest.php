<?php

namespace App\Tests\FunctionalTests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class ProductControllerTest
 *
 * @package App\Tests\FunctionalTests
 */
class ProductControllerTest extends WebTestCase
{
    /**
     *
     */
    public function testApiProductControllerResponseOk()
    {
        $client = static::createClient();

        $client->request('GET', '/api/products');

        $this->assertEquals(401, $client->getResponse()->getStatusCode());
    }

//    public function testApiProductControllerResponseUnauthorized()
//    {
//        $client = static::createClient();
//
//        $client->request('GET', '/api/products');
//
//        $this->assertEquals(401, $client->getResponse()->getStatusCode());
//    }

}
<?php

namespace App\Tests\FunctionalTests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Bundle\FrameworkBundle\Client;

/**
 * Class ProductControllerTest
 *
 * @package App\Tests\FunctionalTests
 */
class ProductControllerTest extends WebTestCase
{
    /**
     * @param string $username
     * @param string $password
     *
     * @return Client
     */
    protected function createAuthenticatedClient($username = 'email10@email.fr', $password = 'password'): Client
    {
        $client = static::createClient();
        $client->request(
            'POST',
            '/api/login_check',
            array(),
            array(),
            array('CONTENT_TYPE' => 'application/json'),
            json_encode(array(
                'username' => $username,
                'password' => $password,
            ))
        );

        $data = json_decode($client->getResponse()->getContent(), true);

        $client = static::createClient();
        $client->setServerParameter('HTTP_Authorization', sprintf('Bearer %s', $data['token']));

        return $client;
    }
    
    
    /**
     *
     */
    public function testProductListingResponseOk(): void
    {
        $client = $this->createAuthenticatedClient();

        $client->request('GET', '/api/products');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    /**
     *
     */
    public function testProductReadingResponseOk(): void
    {
        $client = $this->createAuthenticatedClient();

        $client->request('GET', '/api/products/{id}');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
<?php

namespace App\Tests\FunctionalTests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Bundle\FrameworkBundle\Client;

/**
 * Class UserControllerTest
 *
 * @package App\Tests\FunctionalTests
 */
class UserControllerTest extends WebTestCase
{
    /**
     * @param string $username
     * @param string $password
     *
     * @return Client
     */
    protected function createAuthenticatedClient($username = 'email8@email.fr', $password = 'password'): Client
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
    public function testUserListingResponseOk(): void
    {
        $client = $this->createAuthenticatedClient();

        $client->request('GET', '/api/users');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    /**
     *
     */
    public function testUserReadingResponseOk(): void
    {
        $client = $this->createAuthenticatedClient();

        $client->request('GET', '/api/users/018991bc-4e25-4ffb-9cd6-cc8bd64765bb');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    /**
     *
     */
    public function testUserCreateOk()
    {
        $client = $this->createAuthenticatedClient();

        $data = [
            'name' => 'test',
            'email' => 'test14@test.com'
        ];
        $client->request(
            'POST',
            '/api/users',
            array(),
            array(),
            array('CONTENT_TYPE' => 'application/json'),
            json_encode($data)
        );

        $this->assertEquals(201, $client->getResponse()->getStatusCode());
    }
}
<?php

namespace App\Tests\FunctionalTests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class UserControllerTest
 *
 * @package App\Tests\FunctionalTests
 */
class UserControllerTest extends WebTestCase
{
    use AuthenticationTrait;

    /**
     * User list test
     */
    public function testUserListingResponseOk(): void
    {
        $client = $this->createAuthenticatedClient();

        $client->request('GET', '/api/users');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    /**
     * User display test
     */
    public function testUserReadingResponseOk(): void
    {
        $client = $this->createAuthenticatedClient();

        $client->request('GET', '/api/users/018991bc-4e25-4ffb-9cd6-cc8bd64765bb');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    /**
     * User creation test
     */
    public function testUserCreateOk()
    {
        $client = $this->createAuthenticatedClient();

        $client->request(
            'POST',
            '/api/users',
            array(),
            array(),
            array('Authorization' => $client,
                  'CONTENT_TYPE' => 'application/json'
            ),
            json_encode(
                array(
                'name'=>'test1',
                'email'=>'test1@test.fr'
                )
            )
        );

        $this->assertEquals(201, $client->getResponse()->getStatusCode());
    }

    /**
     * User update test
     */
    public function testUserUpdateOk()
    {
        $client = $this->createAuthenticatedClient();

        $client->request(
            'PUT',
            '/api/users/018991bc-4e25-4ffb-9cd6-cc8bd64765bb',
            array(),
            array(),
            array('Authorization' => $client,
                'CONTENT_TYPE' => 'application/json'
            ),
            json_encode(
                array(
                'name'=>'test2',
                'email'=>'test2@test.fr'
                )
            )
        );

        $this->assertEquals(204, $client->getResponse()->getStatusCode());
    }

    /**
     * User delete test
     */
    public function testUserDeleteOk()
    {
        $client = $this->createAuthenticatedClient();

        $client->request(
            'DELETE',
            '/api/users/018991bc-4e25-4ffb-9cd6-cc8bd64765bb',
            array(),
            array(),
            array('Authorization' => $client,
                'CONTENT_TYPE' => 'application/json'
            )
        );

        $this->assertEquals(204, $client->getResponse()->getStatusCode());
    }
}

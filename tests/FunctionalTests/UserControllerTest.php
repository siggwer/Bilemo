<?php

namespace App\Tests\FunctionalTests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Entity\Client;
use App\Entity\User;


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

        $em = $client->getContainer()->get('doctrine.orm.entity_manager');

        $c = $em->getRepository(Client::class)->findOneByEmail('email2@email.fr');

        $user = $em->getRepository(User::class)->findOneByClient($c);

        $client->request('GET', '/api/users/' . $user->getId());

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
     * User creation not ok test
     */
    public function testUserCreateNotOk()
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
                )
            )
        );

        $this->assertEquals(400, $client->getResponse()->getStatusCode());
    }

    /**
     * User update test
     */
    public function testUserUpdateOk()
    {
        $client = $this->createAuthenticatedClient();
        $em = $client->getContainer()->get('doctrine.orm.entity_manager');

        $c = $em->getRepository(Client::class)->findOneByEmail('email2@email.fr');
        $user = $em->getRepository(User::class)->findOneByClient($c);
        $client->request(
            'PUT',
            '/api/users/' . $user->getId(),
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
     * User update not ok test
     */
    public function testUserUpdateNotOk()
    {
        $client = $this->createAuthenticatedClient();
        $em = $client->getContainer()->get('doctrine.orm.entity_manager');

        $c = $em->getRepository(Client::class)->findOneByEmail('email2@email.fr');
        $user = $em->getRepository(User::class)->findOneByClient($c);
        $client->request(
            'PUT',
            '/api/users/' . $user->getId(),
            array(),
            array(),
            array('Authorization' => $client,
                'CONTENT_TYPE' => 'application/json'
            ),
            json_encode(
                array(
                )
            )
        );

        $this->assertEquals(400, $client->getResponse()->getStatusCode());
    }

    /**
     * User delete test
     */
    public function testUserDeleteOk()
    {
        $client = $this->createAuthenticatedClient();

        $em = $client->getContainer()->get('doctrine.orm.entity_manager');

        $c = $em->getRepository(Client::class)->findOneByEmail('email2@email.fr');

        $user = $em->getRepository(User::class)->findOneByClient($c);

        $client->request(
            'DELETE',
            '/api/users/' . $user->getId(),
            array(),
            array(),
            array('Authorization' => $client,
                'CONTENT_TYPE' => 'application/json'
            )
        );

        $this->assertEquals(204, $client->getResponse()->getStatusCode());
    }
}

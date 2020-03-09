<?php

namespace App\Tests\FunctionalTests;

use Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Client;
use App\Repository\UserRepository;

/**
 * Class ProductControllerTest
 *
 * @package App\Tests\FunctionalTests
 */
class ProductControllerTest extends WebTestCase
{
    function setUp()
    {
        $this->client = static::createClient();
    }

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

        $client->request('GET', '/api/products/016bffef-0acb-40d5-893e-0e06c0204dd1');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
<?php

namespace App\Tests\FunctionalTests;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Client;

/**
 * Trait AuthenticationTrait
 *
 * @package App\Tests\FunctionalTests
 */
trait AuthenticationTrait
{
    /**
     * @param string $username
     * @param string $password
     *
     * @return Client
     */
    protected function createAuthenticatedClient($username = 'email2@email.fr', $password = 'password'): Client
    {
        $client = static::createClient();
        $client->request(
            'POST',
            '/api/login_check',
            array(),
            array(),
            array('CONTENT_TYPE' => 'application/json'),
            json_encode(
                array(
                'username' => $username,
                'password' => $password,
                )
            )
        );

        $data = json_decode($client->getResponse()->getContent(), true);

        $client = static::createClient();
        $client->setServerParameter('HTTP_Authorization', sprintf('Bearer %s', $data['token']));

        return $client;
    }
}

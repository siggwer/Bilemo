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
    use AuthenticationTrait;

    /**
     * Product list test
     */
    public function testProductListingResponseOk(): void
    {
        $client = $this->createAuthenticatedClient();

        $client->request('GET', '/api/products');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    /**
     * PProduct display test
     */
    public function testProductReadingResponseOk(): void
    {
        $client = $this->createAuthenticatedClient();

        $client->request('GET', '/api/products/016bffef-0acb-40d5-893e-0e06c0204dd1');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}

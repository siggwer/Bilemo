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

        $client->request('GET', '/api/products/02565b4d-4e60-4fb2-9887-da83259be190');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}

<?php

namespace App\Tests\FunctionalTests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Entity\Product;

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
     * Product display test
     */
    public function testProductReadingResponseOk(): void
    {
        $client = $this->createAuthenticatedClient();

        $em = $client->getContainer()->get('doctrine.orm.entity_manager');

        $product= $em->getRepository(Product::class)->findOneBy(array(), null, $limit = 1, $offset = null);

        $client->request('GET', '/api/products/' . $product->getId());

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}

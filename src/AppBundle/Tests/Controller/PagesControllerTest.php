<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PagesControllerTest extends WebTestCase
{
    public function testContact()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/contact');
    }

    public function testProfile()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/profile');
    }

    public function testAbout()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/about');
    }

    public function testOrders()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/orders');
    }

}

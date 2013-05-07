<?php

namespace SmartDev\MainBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/main');
        
        $this->assertTrue($crawler->filter('html:contains("Bienvenue")')->count() == 1);
        $this->assertTrue($crawler->filter('h1')->count() == 1);
        $this->assertTrue($crawler->filter('a')->count() == 2);
    }
}

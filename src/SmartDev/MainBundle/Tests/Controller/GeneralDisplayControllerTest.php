<?php
namespace SmartDev\MainBundle\Tests\Controller;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GeneralDisplayControllerTest extends WebTestCase {
	public function test_displayComponents_ShouldDisplayComponentsTable() {
		$client = static::createClient();
		$crawler = $client->request('GET', '/display/components');
		$count = $crawler->filter('table#components')->count();
		$this->assertTrue($count == 1);
	}
	public function test_displayProducts_ShouldDisplayProductsTable() {
		$client = static::createClient();
		$crawler = $client->request('GET', '/display/products');
		$count = $crawler->filter('table#products')->count();
		$this->assertTrue($count == 1);
	}
	
}
?>

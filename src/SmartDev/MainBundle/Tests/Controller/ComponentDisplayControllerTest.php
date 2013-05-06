<?php
namespace SmartDev\MainBundle\Tests\Controller;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ComponentDisplayControllerTest extends WebTestCase {
	public function test_display_ShouldDisplayComponentsTable() {
		$client = static::createClient();
		$crawler = $client->request('GET', '/component/display');
		$count = $crawler->filter('table#components')->count();
		$this->assertTrue($count == 1);
	}
	
	
}
?>

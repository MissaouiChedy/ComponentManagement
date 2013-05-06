<?php
namespace SmartDev\MainBundle\Tests\Controller;
use SmartDev\MainBundle\Controller\ComponentTableModel;
use SmartDev\MainBundle\BuisnessLayer\ComponentDTO;

class ComponentTableModelTest extends \PHPUnit_Framework_TestCase {
	public function test_getHeaders_MustReturnHeaderArray() {
		$model = new ComponentTableModel(null);
		$headers = $model->getHeaders();
		$this->assertEquals($headers[0], "Titre");
		$this->assertEquals($headers[1], "Description");
		$this->assertEquals($headers[2], "Licence");
		$this->assertEquals($headers[3], "Type");
		$this->assertEquals($headers[4], "Nature");
		$this->assertEquals($headers[5], "Etat");
	}
	public function test_getRows_MustContainAllRowsAndColumns() {
		$comp1 = new ComponentDTO("EJB", "Enterprise JAVA BEAN",
				"Proprieaitaire", "Entity Rep", "jar file", "stable", true);
		$comp2 = new ComponentDTO("Junit", "Testing framework", "GNU GPL",
				"Testing framework", "jar file", "stable", false);
		$allComponents = array($comp1, $comp2);
	    $model = new ComponentTableModel($allComponents);
	    $expected = array(array("EJB", "Enterprise JAVA BEAN",
				"Proprieaitaire", "Entity Rep", "jar file", "stable"));
	    $rows = $model->getRows();
	    print_r($rows);
	    $this->assertEquals($rows, $expected);
	    
	}

}

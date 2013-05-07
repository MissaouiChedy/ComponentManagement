<?php
namespace SmartDev\MainBundle\Tests\Controller;
use SmartDev\MainBundle\Controller\ComponentTableModel;
use SmartDev\MainBundle\BuisnessLayer\ComponentDTO;

class ComponentTableModelTest extends \PHPUnit_Framework_TestCase {
	public function test_getHeaders_MustReturnHeaderArray() {
		$model = new ComponentTableModel(null);

		$expected = array("Titre", "Description", "Licence", "Nature", "Type",
				"Etat");
		$this->assertEquals($model->getHeaders(), $expected);
	}
	public function test_getRows_MustReturnVisibleComponents() {
		$ejb = new ComponentDTO("EJB", "Enterprise JAVA BEAN",
				"Proprieaitaire", "Entity Rep", "jar file", "stable", true);
		$junit = new ComponentDTO("Junit", "Testing framework", "GNU GPL",
				"Testing framework", "jar file", "stable", false);
		$allComponents = array($ejb, $junit);

		$model = new ComponentTableModel($allComponents);
		$expected = array(
				array("EJB", "Enterprise JAVA BEAN", "Proprieaitaire",
						"Entity Rep", "jar file", "stable"));

		$this->assertEquals($model->getRows(), $expected);

	}
	public function test_getRows_MustNotReturnInVisibleComponents() {
		$ejb = new ComponentDTO("EJB", "Enterprise JAVA BEAN",
				"Proprieaitaire", "Entity Rep", "jar file", "stable", false);
		$junit = new ComponentDTO("Junit", "Testing framework", "GNU GPL",
				"Testing framework", "jar file", "stable", false);
		$allComponents = array($ejb, $junit);
	
		$model = new ComponentTableModel($allComponents);
		$expected = array();
	
		$this->assertEquals($model->getRows(), $expected);
	
	}

}

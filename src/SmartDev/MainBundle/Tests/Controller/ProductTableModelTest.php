<?php
namespace SmartDev\MainBundle\Tests\Controller;
use SmartDev\MainBundle\Controller\ProductTableModel;
use SmartDev\MainBundle\BuisnessLayer\ProductDTO;
class ProductTableModelTest extends \PHPUnit_Framework_TestCase{
     
	public function test_getHeaders_ShouldReturnArrayOfHeaders(){
     	$model = new ProductTableModel(array());
     	$expected = array("Titre", "Date de creation",
     			"Description", "Nature", "Type", "Licence", "Etat",
     			"Technologie");
     	$this->assertEquals($model->getHeaders(), $expected);
     }

     public function test_getRows_ShouldReturnProductRows(){
     	$eclipse = new ProductDTO("Eclipse", "12/12/2000", "Eclipse Development platform", "MIT", 
     			"jar", "IDE", "RC", true, "JAVA");
     	$ant = new ProductDTO("Apache Ant", "01/09/1999", "Ant build tool", "Apache", 
     			"jar", "Build tool", "stable", true, "Java");
     	$model = new ProductTableModel(array($eclipse, $ant));
     	
     	$expected = array(
     			array("Eclipse", "12/12/2000", "Eclipse Development platform", "MIT", 
     			"jar", "IDE", "RC", "JAVA"), 
     			array("Apache Ant", "01/09/1999", "Ant build tool", "Apache", 
     			"jar", "Build tool", "stable", "Java")
     		);
     	$this->assertEquals($model->getRows(), $expected);
     }
     
     public function test_getRows_ShouldNotReturnInvisibleProducts(){
     	$eclipse = new ProductDTO("Eclipse", "12/12/2000", "Eclipse Development platform", "MIT",
     			"jar", "IDE", "RC", false, "JAVA");
     	$ant = new ProductDTO("Apache Ant", "01/09/1999", "Ant build tool", "Apache",
     			"jar", "Build tool", "stable", false, "Java");
     	$model = new ProductTableModel(array($eclipse, $ant));
     
     	$expected = array();
     	$this->assertEquals($model->getRows(), $expected);
     }    
}

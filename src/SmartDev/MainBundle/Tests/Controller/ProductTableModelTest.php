<?php
namespace SmartDev\MainBundle\Tests\Controller;
use SmartDev\MainBundle\Controller\ProductTableModel;
use SmartDev\MainBundle\BuisnessLayer\ProductDTO;
class ProductTableModelTest extends \PHPUnit_Framework_TestCase{
     
	public function test_getHeaders_ShouldReturnArrayOfHeaders(){
     	$model = new ProductTableModel(array());
     	$expected = array("Titre", 
     			"Description", "Nature", "Type", "Licence", "Etat"
     			);
     	$this->assertEquals($model->getHeaders(), $expected);
     }

     public function test_getRows_ShouldReturnProductRows(){
     	$eclipse = new ProductDTO("Eclipse", "12/12/1990", "Eclipse Development platform", "MIT", 
     			"jar", "IDE", "RC", true, "Java");
     	$ant = new ProductDTO("Apache Ant", "12/12/1990", "Ant build tool", "Apache", 
     			"jar", "Build tool", "stable", true, "Java");
     	$model = new ProductTableModel(array($eclipse, $ant));
     	
     	$expected = array(
     			array("Eclipse", "Eclipse Development platform", "MIT", 
     			"jar", "IDE", "RC"), 
     			array("Apache Ant", "Ant build tool", "Apache", 
     			"jar", "Build tool", "stable")
     		);
     	$this->assertEquals($model->getRows(), $expected);
     }
     
     public function test_getRows_ShouldNotReturnInvisibleProducts(){
     	$eclipse = new ProductDTO("Eclipse", "12/12/1990","Eclipse Development platform", "MIT",
     			"jar", "IDE", "RC", false, "JAVA");
     	$ant = new ProductDTO("Apache Ant", "12/12/1990","Ant build tool", "Apache",
     			"jar", "Build tool", "stable", false, "Java");
     	$model = new ProductTableModel(array($eclipse, $ant));
     
     	$expected = array();
     	$this->assertEquals($model->getRows(), $expected);
     }    
}

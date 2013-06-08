<?php
namespace SmartDev\MainBundle\Controller;
class ProductTableModel {
    private $allProducts; 
	private $headers;
	public function __construct($products){
    	$this->allProducts = $products;
    	$this->headers = array("Titre",
     			"Description", "Nature", "Type", "Licence", "Etat");
    }
    public function getHeaders(){
    	return $this->headers;
    }
    public function getRows(){
    	$rows = array();
    	foreach($this->allProducts as $product){
    		if ($product->isVisible()){
    			$rows[] = array(
    					$product->getTitle(), 
    					$product->getDescription(),
    					$product->getLicence(),
    					$product->getNature(),
    					$product->getType(),
    					$product->getState()
    					);
    		}
    	}
    	return $rows;
    }
}

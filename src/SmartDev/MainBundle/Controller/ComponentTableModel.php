<?php

namespace SmartDev\MainBundle\Controller;
use SmartDev\MainBundle\BuisnessLayer\ComponentDTO;

class ComponentTableModel {
	private $components;
	private $headers;
	
	public function __construct($components) {
		$this->components = $components;
		$this->headers = array("Titre", "Description", "Licence", "Type",
				"Nature", "Etat");
	}
	public function getHeaders(){
		return $this->headers;
	}
	public function getRows() {
		$rows = array();
		for ($i = 0 ; $i< count($this->components);$i++) {
			if ($this->components[$i]->isVisible()) {
				$rows[] = array($this->components[$i]->getTitle(), $this->components[$i]->getDescription(), $this->components[$i]->getLicence(),
						$this->components[$i]->getNature(), $this->components[$i]->getType(), $this->components[$i]->getState());
			}
		}
		return $rows;
	}
}

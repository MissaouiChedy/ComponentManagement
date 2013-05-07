<?php

namespace SmartDev\MainBundle\Controller;
use SmartDev\MainBundle\BuisnessLayer\ComponentDTO;

class ComponentTableModel {
	private $components;
	private $headers;

	public function __construct($components) {
		$this->components = $components;
		$this->headers = array("Titre", "Description", "Licence", "Nature",
				"Type", "Etat");
	}
	public function getHeaders() {
		return $this->headers;
	}
	public function getRows() {
            
            // update
		$rows = array();
		foreach ($this->components as $component) {
			if ($component->isVisible()) {
				$rows[] = array($component->getTitle(),
						$component->getDescription(), $component->getLicence(),
						$component->getNature(), $component->getType(),
						$component->getState());
			}
		}
		return $rows;
	}
}

<?php
namespace SmartDev\MainBundle\BuisnessLayer;
class ComponentDTO {
	private $title;
	private $description;
	private $licence;
	private $nature;
	private $type;
	private $state;
    private $visibility;
    private $version;
	
	public function __construct($title, $description, $licence, $nature, $type,
			$state, $visibility) {
		$this->title = $title;
		$this->description = $description;
		$this->licence = $licence;
		$this->nature = $nature;
		$this->type = $type;
		$this->state = $state;
	    $this->visibility = $visibility;
	}

	public function getTitle() {
		return $this->title;
	}

	public function getDescription() {
		return $this->description;
	}

	public function getLicence() {
		return $this->licence;
	}

	public function getNature() {
		return $this->nature;
	}

	public function getType() {
		return $this->type;
	}

	public function getState() {
		return $this->state;
	}
    public function isVisible(){
    	return $this->visibility;
    }
}

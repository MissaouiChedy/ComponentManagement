<?php
namespace SmartDev\MainBundle\BuisnessLayer;
class ProductDTO {
	private $title;
	private $creationDate;
	private $description;
	private $licence;
	private $nature;
	private $type;
	private $state;
	private $visibility;
	private $version;
	private $madeOfTechnology;
	
	public function __construct($title, $creationDate, $description,$licence, $nature,
			$type, $state, $visibility, $madeOfTechnology) {
		$this->title = $title;
		$this->creationDate = $creationDate;
		$this->description = $description;
		$this->nature = $nature;
		$this->type = $type;
		$this->licence = $licence;
		$this->state = $state;
		$this->visibility = $visibility;
		$this->madeOfTechnology = $madeOfTechnology;
	}

	public function getTitle() {
		return $this->title;
	}

	public function setTitle($title) {
		$this->title = $title;
	}

	public function getCreationDate() {
		return $this->creationDate;
	}

	public function setCreationDate($creationDate) {
		$this->creationDate = $creationDate;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
	}

	public function getNature() {
		return $this->nature;
	}

	public function setNature($nature) {
		$this->nature = $nature;
	}

	public function getType() {
		return $this->type;
	}

	public function setType($type) {
		$this->type = $type;
	}

	public function getLicence() {
		return $this->licence;
	}

	public function setLicence($licence) {
		$this->licence = $licence;
	}

	public function getState() {
		return $this->state;
	}

	public function setState($state) {
		$this->state = $state;
	}

	public function isVisible() {
		return $this->visibility;
	}

	public function setVisibility($visibility) {
		$this->visibility = $visibility;
	}

	public function getMadeOfTechnology() {
		return $this->madeOfTechnology;
	}

	public function setMadeOfTechnology($madeOfTechnology) {
		$this->madeOfTechnology = $madeOfTechnology;
	}

}

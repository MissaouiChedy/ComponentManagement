<?php

namespace SmartDev\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Composant
 */
class Composant
{    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titreComposant;

    /**
     * @var string
     */
    private $descriptionComposant;

    /**
     * @var boolean
     */
    private $visibiliteComposant;

    /**
     * @var \SmartDev\MainBundle\Entity\NatureComposant
     */
    private $natureComposant;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $versionComposant;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->versionComposant = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titreComposant
     *
     * @param string $titreComposant
     * @return Composant
     */
    public function setTitreComposant($titreComposant)
    {
        $this->titreComposant = $titreComposant;
    
        return $this;
    }

    /**
     * Get titreComposant
     *
     * @return string 
     */
    public function getTitreComposant()
    {
        return $this->titreComposant;
    }

    /**
     * Set descriptionComposant
     *
     * @param string $descriptionComposant
     * @return Composant
     */
    public function setDescriptionComposant($descriptionComposant)
    {
        $this->descriptionComposant = $descriptionComposant;
    
        return $this;
    }

    /**
     * Get descriptionComposant
     *
     * @return string 
     */
    public function getDescriptionComposant()
    {
        return $this->descriptionComposant;
    }

    /**
     * Set visibiliteComposant
     *
     * @param boolean $visibiliteComposant
     * @return Composant
     */
    public function setVisibiliteComposant($visibiliteComposant)
    {
        $this->visibiliteComposant = $visibiliteComposant;
    
        return $this;
    }

    /**
     * Get visibiliteComposant
     *
     * @return boolean 
     */
    public function getVisibiliteComposant()
    {
        return $this->visibiliteComposant;
    }

    /**
     * Set natureComposant
     *
     * @param \SmartDev\MainBundle\Entity\NatureComposant $natureComposant
     * @return Composant
     */
    public function setNatureComposant(\SmartDev\MainBundle\Entity\NatureComposant $natureComposant = null)
    {
        $this->natureComposant = $natureComposant;
    
        return $this;
    }

    /**
     * Get natureComposant
     *
     * @return \SmartDev\MainBundle\Entity\NatureComposant 
     */
    public function getNatureComposant()
    {
        return $this->natureComposant;
    }

    /**
     * Add versionComposant
     *
     * @param \SmartDev\MainBundle\Entity\VersionCmposant $versionComposant
     * @return Composant
     */
    public function addVersionComposant(\SmartDev\MainBundle\Entity\VersionCmposant $versionComposant)
    {
        $this->versionComposant[] = $versionComposant;
    
        return $this;
    }

    /**
     * Remove versionComposant
     *
     * @param \SmartDev\MainBundle\Entity\VersionCmposant $versionComposant
     */
    public function removeVersionComposant(\SmartDev\MainBundle\Entity\VersionCmposant $versionComposant)
    {
        $this->versionComposant->removeElement($versionComposant);
    }

    /**
     * Get versionComposant
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVersionComposant()
    {
        return $this->versionComposant;
    }
}
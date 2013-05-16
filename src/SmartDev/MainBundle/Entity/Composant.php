<?php

namespace SmartDev\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Composant
 */
class Composant
{
    /**
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
     * @var integer
     */
    private $idLicenceComposant;

    /**
     * @var integer
     */
    private $idTypeComposant;
    /**
     * @var integer
     */
    private $idVersionComposant;

    /**
     * @var integer
     */
    private $idNatureComposant;

    /**
     * @var integer
     */
    private $idEtatComposant;


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
     * Get idVersionComposant
     *
     * @return integer 
     */
    public function getidVersionComposant()
    {
        return $this->idVersionComposant;
    }
    
     /**
     * Set idVersionComposant
     *
     * @param integer $idVersionComposant
     * @return Composant
     */
    public function setidVersionComposant($idVersionComposant)
    {
        $this->titreComposant = $idVersionComposant;
    
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
     * Set idLicenceComposant
     *
     * @param integer $idLicenceComposant
     * @return Composant
     */
    public function setIdLicenceComposant($idLicenceComposant)
    {
        $this->idLicenceComposant = $idLicenceComposant;
    
        return $this;
    }

    /**
     * Get idLicenceComposant
     *
     * @return integer 
     */
    public function getIdLicenceComposant()
    {
        return $this->idLicenceComposant;
    }

    /**
     * Set idTypeComposant
     *
     * @param integer $idTypeComposant
     * @return Composant
     */
    public function setIdTypeComposant($idTypeComposant)
    {
        $this->idTypeComposant = $idTypeComposant;
    
        return $this;
    }

    /**
     * Get idTypeComposant
     *
     * @return integer 
     */
    public function getIdTypeComposant()
    {
        return $this->idTypeComposant;
    }

    /**
     * Set idNatureComposant
     *
     * @param integer $idNatureComposant
     * @return Composant
     */
    public function setIdNatureComposant($idNatureComposant)
    {
        $this->idNatureComposant = $idNatureComposant;
    
        return $this;
    }

    /**
     * Get idNatureComposant
     *
     * @return integer 
     */
    public function getIdNatureComposant()
    {
        return $this->idNatureComposant;
    }

    /**
     * Set idEtatComposant
     *
     * @param integer $idEtatComposant
     * @return Composant
     */
    public function setIdEtatComposant($idEtatComposant)
    {
        $this->idEtatComposant = $idEtatComposant;
    
        return $this;
    }

    /**
     * Get idEtatComposant
     *
     * @return integer 
     */
    public function getIdEtatComposant()
    {
        return $this->idEtatComposant;
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
}
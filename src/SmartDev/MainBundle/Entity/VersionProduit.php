<?php

namespace SmartDev\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VersionProduit
 */
class VersionProduit
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nomVersionProduit;

    /**
     * @var \DateTime
     */
    private $dateVersionProduit;


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
     * Set nomVersionProduit
     *
     * @param string $nomVersionProduit
     * @return VersionProduit
     */
    public function setNomVersionProduit($nomVersionProduit)
    {
        $this->nomVersionProduit = $nomVersionProduit;
    
        return $this;
    }

    /**
     * Get nomVersionProduit
     *
     * @return string 
     */
    public function getNomVersionProduit()
    {
        return $this->nomVersionProduit;
    }

    /**
     * Set dateVersionProduit
     *
     * @param \DateTime $dateVersionProduit
     * @return VersionProduit
     */
    public function setDateVersionProduit($dateVersionProduit)
    {
        $this->dateVersionProduit = $dateVersionProduit;
    
        return $this;
    }

    /**
     * Get dateVersionProduit
     *
     * @return \DateTime 
     */
    public function getDateVersionProduit()
    {
        return $this->dateVersionProduit;
    }
}
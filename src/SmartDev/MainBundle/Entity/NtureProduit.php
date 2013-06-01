<?php

namespace SmartDev\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NtureProduit
 */
class NtureProduit
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nomNatureProduit;


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
     * Set nomNatureProduit
     *
     * @param string $nomNatureProduit
     * @return NtureProduit
     */
    public function setNomNatureProduit($nomNatureProduit)
    {
        $this->nomNatureProduit = $nomNatureProduit;
    
        return $this;
    }

    /**
     * Get nomNatureProduit
     *
     * @return string 
     */
    public function getNomNatureProduit()
    {
        return $this->nomNatureProduit;
    }
}
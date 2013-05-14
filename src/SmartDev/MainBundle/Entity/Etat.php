<?php

namespace SmartDev\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etat
 */
class Etat
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nomEtat;


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
     * Set nomEtat
     *
     * @param string $nomEtat
     * @return Etat
     */
    public function setNomEtat($nomEtat)
    {
        $this->nomEtat = $nomEtat;
    
        return $this;
    }

    /**
     * Get nomEtat
     *
     * @return string 
     */
    public function getNomEtat()
    {
        return $this->nomEtat;
    }
}
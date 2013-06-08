<?php

namespace SmartDev\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NatureComposant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SmartDev\MainBundle\Entity\NatureComposantRepository")
 */
class NatureComposant
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomNature", type="string")
     */
    private $nomNature;


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
     * Set nomNature
     *
     * @param string $nomNature
     * @return NatureComposant
     */
    public function setNomNature($nomNature)
    {
        $this->nomNature = $nomNature;
    
        return $this;
    }

    /**
     * Get nomNature
     *
     * @return string 
     */
    public function getNomNature()
    {
        return $this->nomNature;
    }
    public function __toString(){
    	return $this->getNomNature();
    }
}
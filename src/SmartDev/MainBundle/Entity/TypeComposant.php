<?php

namespace SmartDev\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeComposant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SmartDev\MainBundle\Entity\TypeComposantRepository")
 */
class TypeComposant
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
     * @ORM\Column(name="nomType", type="string")
     */
    private $nomType;


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
     * Set nomType
     *
     * @param string $nomType
     * @return TypeComposant
     */
    public function setNomType($nomType)
    {
        $this->nomType = $nomType;
    
        return $this;
    }

    /**
     * Get nomType
     *
     * @return string 
     */
    public function getNomType()
    {
        return $this->nomType;
    }
    public function __toString(){
    	return $this->getNomType();
    }
}
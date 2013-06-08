<?php

namespace SmartDev\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Licence
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SmartDev\MainBundle\Entity\LicenceRepository")
 */
class Licence
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
     * @ORM\Column(name="nomLicence", type="string")
     */
    private $nomLicence;


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
     * Set nomLicence
     *
     * @param string $nomLicence
     * @return Licence
     */
    public function setNomLicence($nomLicence)
    {
        $this->nomLicence = $nomLicence;
    
        return $this;
    }

    /**
     * Get nomLicence
     *
     * @return string 
     */
    public function getNomLicence()
    {
        return $this->nomLicence;
    }
    public function __toString(){
    	return $this->getNomLicence();
    }
}
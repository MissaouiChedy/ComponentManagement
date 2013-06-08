<?php

namespace SmartDev\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProgrammeProduit
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SmartDev\MainBundle\Entity\ProgrammeProduitRepository")
 */
class ProgrammeProduit
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
     * @ORM\Column(name="nomProgramme", type="string")
     */
    private $nomProgramme;


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
     * Set nomProgramme
     *
     * @param string $nomProgramme
     * @return ProgrammeProduit
     */
    public function setNomProgramme($nomProgramme)
    {
        $this->nomProgramme = $nomProgramme;
    
        return $this;
    }

    /**
     * Get nomProgramme
     *
     * @return string 
     */
    public function getNomProgramme()
    {
        return $this->nomProgramme;
    }
}
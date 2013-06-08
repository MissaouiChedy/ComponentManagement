<?php

namespace SmartDev\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VersionProduit
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SmartDev\MainBundle\Entity\VersionProduitRepository")
 */
class VersionProduit
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
     * @ORM\Column(name="nomVersion", type="string")
     */
    private $nomVersion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateVersion")
     */
    private $dateVersion;


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
     * Set nomVersion
     *
     * @param string $nomVersion
     * @return VersionProduit
     */
    public function setNomVersion($nomVersion)
    {
        $this->nomVersion = $nomVersion;
    
        return $this;
    }

    /**
     * Get nomVersion
     *
     * @return string 
     */
    public function getNomVersion()
    {
        return $this->nomVersion;
    }

    /**
     * Set dateVersion
     *
     * @param \DateTime $dateVersion
     * @return VersionProduit
     */
    public function setDateVersion(\DateTime $dateVersion)
    {
        $this->dateVersion = $dateVersion;
    
        return $this;
    }

    /**
     * Get dateVersion
     *
     * @return \DateTime 
     */
    public function getDateVersion()
    {
        return $this->dateVersion;
    }
}
<?php

namespace SmartDev\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VersionCmposant
 */
class VersionCmposant
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nomVersion;

    /**
     * @var \DateTime
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
     * @return VersionCmposant
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
     * @return VersionCmposant
     */
    public function setDateVersion($dateVersion)
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
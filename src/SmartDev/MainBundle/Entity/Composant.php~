<?php

namespace SmartDev\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Composant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SmartDev\MainBundle\Entity\ComposantRepository")
 */
class Composant
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
     * @ORM\Column(name="titre", type="string")
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string")
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="visibilite", type="boolean")
     */
    private $visibilite;
    /**
     * @ORM\OneToOne(targetEntity="Etat")
     */
    private $etat;
    /**
     *@ORM\OneToOne(targetEntity="Licence")
     */
    private $licence;
    /**
     * 
     * @ORM\OneToOne(targetEntity="TypeComposant")
     */
    private $typeComposant;
    /**
     * 
     * @ORM\OneToOne(targetEntity="NatureComposant")
     */
    private $natureComposant;
    /**
     * 
     * @ORM\OneToMany(targetEntity="VersionComposant", mappedBy="Composant")
     */
    private $versionComposant;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->versionComposant = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Set titre
     *
     * @param string $titre
     * @return Composant
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Composant
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set visibilite
     *
     * @param boolean $visibilite
     * @return Composant
     */
    public function setVisibilite($visibilite)
    {
        $this->visibilite = $visibilite;
    
        return $this;
    }

    /**
     * Get visibilite
     *
     * @return boolean 
     */
    public function getVisibilite()
    {
        return $this->visibilite;
    }

    /**
     * Set etat
     *
     * @param \SmartDev\MainBundle\Entity\Etat $etat
     * @return Composant
     */
    public function setEtat(\SmartDev\MainBundle\Entity\Etat $etat = null)
    {
        $this->etat = $etat;
    
        return $this;
    }

    /**
     * Get etat
     *
     * @return \SmartDev\MainBundle\Entity\Etat 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set licence
     *
     * @param \SmartDev\MainBundle\Entity\Licence $licence
     * @return Composant
     */
    public function setLicence(\SmartDev\MainBundle\Entity\Licence $licence = null)
    {
        $this->licence = $licence;
    
        return $this;
    }

    /**
     * Get licence
     *
     * @return \SmartDev\MainBundle\Entity\Licence 
     */
    public function getLicence()
    {
        return $this->licence;
    }

    /**
     * Set typeComposant
     *
     * @param \SmartDev\MainBundle\Entity\TypeComposant $typeComposant
     * @return Composant
     */
    public function setTypeComposant(\SmartDev\MainBundle\Entity\TypeComposant $typeComposant = null)
    {
        $this->typeComposant = $typeComposant;
    
        return $this;
    }

    /**
     * Get typeComposant
     *
     * @return \SmartDev\MainBundle\Entity\TypeComposant 
     */
    public function getTypeComposant()
    {
        return $this->typeComposant;
    }

    /**
     * Set natureComposant
     *
     * @param \SmartDev\MainBundle\Entity\NatureComposant $natureComposant
     * @return Composant
     */
    public function setNatureComposant(\SmartDev\MainBundle\Entity\NatureComposant $natureComposant = null)
    {
        $this->natureComposant = $natureComposant;
    
        return $this;
    }

    /**
     * Get natureComposant
     *
     * @return \SmartDev\MainBundle\Entity\NatureComposant 
     */
    public function getNatureComposant()
    {
        return $this->natureComposant;
    }

    /**
     * Add versionComposant
     *
     * @param \SmartDev\MainBundle\Entity\VersionComposant $versionComposant
     * @return Composant
     */
    public function addVersionComposant(\SmartDev\MainBundle\Entity\VersionComposant $versionComposant)
    {
        $this->versionComposant[] = $versionComposant;
    
        return $this;
    }

    /**
     * Remove versionComposant
     *
     * @param \SmartDev\MainBundle\Entity\VersionComposant $versionComposant
     */
    public function removeVersionComposant(\SmartDev\MainBundle\Entity\VersionComposant $versionComposant)
    {
        $this->versionComposant->removeElement($versionComposant);
    }

    /**
     * Get versionComposant
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVersionComposant()
    {
        return $this->versionComposant;
    }
}
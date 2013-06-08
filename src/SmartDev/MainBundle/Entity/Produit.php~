<?php

namespace SmartDev\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SmartDev\MainBundle\Entity\ProduitRepository")
 */
class Produit
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
     * @ORM\OneToOne(targetEntity="TypeProduit")
     */
    private $typeProduit;
    /**
     *
     * @ORM\OneToOne(targetEntity="NatureProduit")
     */
    private $natureProduit;
    /**
     *
     * @ORM\OneToMany(targetEntity="VersionProduit", mappedBy="Produit")
     */
    private $versionProduit;

    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->versionProduit = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Produit
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
     * @return Produit
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
     * @return Produit
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
     * @return Produit
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
     * @return Produit
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
     * Set typeProduit
     *
     * @param \SmartDev\MainBundle\Entity\TypeProduit $typeProduit
     * @return Produit
     */
    public function setTypeProduit(\SmartDev\MainBundle\Entity\TypeProduit $typeProduit = null)
    {
        $this->typeProduit = $typeProduit;
    
        return $this;
    }

    /**
     * Get typeProduit
     *
     * @return \SmartDev\MainBundle\Entity\TypeProduit 
     */
    public function getTypeProduit()
    {
        return $this->typeProduit;
    }

    /**
     * Set natureProduit
     *
     * @param \SmartDev\MainBundle\Entity\NatureProduit $natureProduit
     * @return Produit
     */
    public function setNatureProduit(\SmartDev\MainBundle\Entity\NatureProduit $natureProduit = null)
    {
        $this->natureProduit = $natureProduit;
    
        return $this;
    }

    /**
     * Get natureProduit
     *
     * @return \SmartDev\MainBundle\Entity\NatureProduit 
     */
    public function getNatureProduit()
    {
        return $this->natureProduit;
    }

    /**
     * Add versionProduit
     *
     * @param \SmartDev\MainBundle\Entity\VersionProduit $versionProduit
     * @return Produit
     */
    public function addVersionProduit(\SmartDev\MainBundle\Entity\VersionProduit $versionProduit)
    {
        $this->versionProduit[] = $versionProduit;
    
        return $this;
    }

    /**
     * Remove versionProduit
     *
     * @param \SmartDev\MainBundle\Entity\VersionProduit $versionProduit
     */
    public function removeVersionProduit(\SmartDev\MainBundle\Entity\VersionProduit $versionProduit)
    {
        $this->versionProduit->removeElement($versionProduit);
    }

    /**
     * Get versionProduit
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVersionProduit()
    {
        return $this->versionProduit;
    }
}
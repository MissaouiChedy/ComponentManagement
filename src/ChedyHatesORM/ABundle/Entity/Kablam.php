<?php

namespace ChedyHatesORM\ABundle\Entity;

use Doctrine\ORM\Mapping\ManyToMany;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kablam
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ChedyHatesORM\ABundle\Entity\KablamRepository")
 */
class Kablam
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
     * @ORM\OneToOne(targetEntity="Chiromi", mappedBy="kablam")
     */
    private $chiromi;
    /**
     * @ORM\OneToMany(targetEntity="Festus", mappedBy="kablam")
     */
    private $festus;
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
     * Constructor
     */
    public function __construct()
    {
        $this->festus = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set chiromi
     *
     * @param \ChedyHatesORM\ABundle\Entity\Chiromi $chiromi
     * @return Kablam
     */
    public function setChiromi(\ChedyHatesORM\ABundle\Entity\Chiromi $chiromi = null)
    {
        $this->chiromi = $chiromi;
    
        return $this;
    }

    /**
     * Get chiromi
     *
     * @return \ChedyHatesORM\ABundle\Entity\Chiromi 
     */
    public function getChiromi()
    {
        return $this->chiromi;
    }

    /**
     * Add festus
     *
     * @param \ChedyHatesORM\ABundle\Entity\Festus $festus
     * @return Kablam
     */
    public function addFestu(\ChedyHatesORM\ABundle\Entity\Festus $festus)
    {
        $this->festus[] = $festus;
    
        return $this;
    }

    /**
     * Remove festus
     *
     * @param \ChedyHatesORM\ABundle\Entity\Festus $festus
     */
    public function removeFestu(\ChedyHatesORM\ABundle\Entity\Festus $festus)
    {
        $this->festus->removeElement($festus);
    }

    /**
     * Get festus
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFestus()
    {
        return $this->festus;
    }
}
<?php

namespace ChedyHatesORM\ABundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Festus
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ChedyHatesORM\ABundle\Entity\FestusRepository")
 */
class Festus
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
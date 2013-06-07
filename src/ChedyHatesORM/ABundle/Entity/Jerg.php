<?php

namespace ChedyHatesORM\ABundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jerg
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ChedyHatesORM\ABundle\Entity\JergRepository")
 */
class Jerg
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

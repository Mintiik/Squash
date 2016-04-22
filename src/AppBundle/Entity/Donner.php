<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Donner
 *
 * @ORM\Table(name="donner")
 * @ORM\Entity
 */
class Donner
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_cours", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCours;



    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Donner
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Set idCours
     *
     * @param integer $idCours
     *
     * @return Donner
     */
    public function setIdCours($idCours)
    {
        $this->idCours = $idCours;

        return $this;
    }

    /**
     * Get idCours
     *
     * @return integer
     */
    public function getIdCours()
    {
        return $this->idCours;
    }
}

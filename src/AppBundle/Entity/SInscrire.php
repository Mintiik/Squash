<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SInscrire
 *
 * @ORM\Table(name="s_inscrire")
 * @ORM\Entity
 */
class SInscrire
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
     * @var string
     *
     * @ORM\Column(name="planning", type="string", length=25, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $planning;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_inscrit", type="integer", nullable=true)
     */
    private $maxInscrit;



    /**
     * Set id
     *
     * @param integer $id
     *
     * @return SInscrire
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
     * @return SInscrire
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

    /**
     * Set planning
     *
     * @param string $planning
     *
     * @return SInscrire
     */
    public function setPlanning($planning)
    {
        $this->planning = $planning;

        return $this;
    }

    /**
     * Get planning
     *
     * @return string
     */
    public function getPlanning()
    {
        return $this->planning;
    }

    /**
     * Set maxInscrit
     *
     * @param integer $maxInscrit
     *
     * @return SInscrire
     */
    public function setMaxInscrit($maxInscrit)
    {
        $this->maxInscrit = $maxInscrit;

        return $this;
    }

    /**
     * Get maxInscrit
     *
     * @return integer
     */
    public function getMaxInscrit()
    {
        return $this->maxInscrit;
    }
}

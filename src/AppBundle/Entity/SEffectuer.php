<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SEffectuer
 *
 * @ORM\Table(name="s_effectuer")
 * @ORM\Entity
 */
class SEffectuer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="num_salle", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numSalle;

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
     * Set numSalle
     *
     * @param integer $numSalle
     *
     * @return SEffectuer
     */
    public function setNumSalle($numSalle)
    {
        $this->numSalle = $numSalle;

        return $this;
    }

    /**
     * Get numSalle
     *
     * @return integer
     */
    public function getNumSalle()
    {
        return $this->numSalle;
    }

    /**
     * Set idCours
     *
     * @param integer $idCours
     *
     * @return SEffectuer
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
     * @return SEffectuer
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
}

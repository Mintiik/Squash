<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reserver
 *
 * @ORM\Table(name="reserver")
 * @ORM\Entity
 */
class Reserver
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
     * @ORM\Column(name="num_salle", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numSalle;

    /**
     * @var string
     *
     * @ORM\Column(name="planning", type="string", length=25, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $planning;



    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Reserver
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
     * Set numSalle
     *
     * @param integer $numSalle
     *
     * @return Reserver
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
     * Set planning
     *
     * @param string $planning
     *
     * @return Reserver
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

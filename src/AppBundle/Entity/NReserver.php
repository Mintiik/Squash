<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NReserver
 *
 * @ORM\Table(name="n_reserver")
 * @ORM\Entity
 */
class NReserver
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
     * Set id
     *
     * @param integer $id
     *
     * @return NReserver
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
     * @return NReserver
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
}

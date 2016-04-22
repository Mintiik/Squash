<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salle
 *
 * @ORM\Table(name="salle")
 * @ORM\Entity
 */
class Salle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="num_salle", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numSalle;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=25, nullable=true)
     */
    private $type;



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
     * Set type
     *
     * @param string $type
     *
     * @return Salle
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}

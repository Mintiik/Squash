<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Casier
 *
 * @ORM\Table(name="casier")
 * @ORM\Entity
 */
class Casier
{
    /**
     * @var integer
     *
     * @ORM\Column(name="num_casier", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numCasier;



    /**
     * Get numCasier
     *
     * @return integer
     */
    public function getNumCasier()
    {
        return $this->numCasier;
    }
}

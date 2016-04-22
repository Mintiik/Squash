<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NSInscrire
 *
 * @ORM\Table(name="n_s_inscrire")
 * @ORM\Entity
 */
class NSInscrire
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
     * @return NSInscrire
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
     * @return NSInscrire
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

<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Louer
 *
 * @ORM\Table(name="louer")
 * @ORM\Entity
 */
class Louer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_produit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut_loc", type="datetime", nullable=true)
     */
    private $dateDebutLoc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin_loc", type="datetime", nullable=true)
     */
    private $dateFinLoc;



    /**
     * Get idProduit
     *
     * @return integer
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    /**
     * Set dateDebutLoc
     *
     * @param \DateTime $dateDebutLoc
     *
     * @return Louer
     */
    public function setDateDebutLoc($dateDebutLoc)
    {
        $this->dateDebutLoc = $dateDebutLoc;

        return $this;
    }

    /**
     * Get dateDebutLoc
     *
     * @return \DateTime
     */
    public function getDateDebutLoc()
    {
        return $this->dateDebutLoc;
    }

    /**
     * Set dateFinLoc
     *
     * @param \DateTime $dateFinLoc
     *
     * @return Louer
     */
    public function setDateFinLoc($dateFinLoc)
    {
        $this->dateFinLoc = $dateFinLoc;

        return $this;
    }

    /**
     * Get dateFinLoc
     *
     * @return \DateTime
     */
    public function getDateFinLoc()
    {
        return $this->dateFinLoc;
    }
}

<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrat
 *
 * @ORM\Table(name="contrat")
 * @ORM\Entity
 */
class Contrat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="num_contrat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numContrat;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_produit", type="integer", nullable=true)
     */
    private $idProduit;



    /**
     * Get numContrat
     *
     * @return integer
     */
    public function getNumContrat()
    {
        return $this->numContrat;
    }

    /**
     * Set idProduit
     *
     * @param integer $idProduit
     *
     * @return Contrat
     */
    public function setIdProduit($idProduit)
    {
        $this->idProduit = $idProduit;

        return $this;
    }

    /**
     * Get idProduit
     *
     * @return integer
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }
}

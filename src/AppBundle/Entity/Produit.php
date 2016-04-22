<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity
 */
class Produit
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
     * @var string
     *
     * @ORM\Column(name="libelle_produit", type="string", length=25, nullable=true)
     */
    private $libelleProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="prix_produit", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $prixProduit;



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
     * Set libelleProduit
     *
     * @param string $libelleProduit
     *
     * @return Produit
     */
    public function setLibelleProduit($libelleProduit)
    {
        $this->libelleProduit = $libelleProduit;

        return $this;
    }

    /**
     * Get libelleProduit
     *
     * @return string
     */
    public function getLibelleProduit()
    {
        return $this->libelleProduit;
    }

    /**
     * Set prixProduit
     *
     * @param string $prixProduit
     *
     * @return Produit
     */
    public function setPrixProduit($prixProduit)
    {
        $this->prixProduit = $prixProduit;

        return $this;
    }

    /**
     * Get prixProduit
     *
     * @return string
     */
    public function getPrixProduit()
    {
        return $this->prixProduit;
    }
}

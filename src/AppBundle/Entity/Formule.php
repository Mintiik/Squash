<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formule
 *
 * @ORM\Table(name="formule")
 * @ORM\Entity
 */
class Formule
{
    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=25, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="tarif", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $tarif;

    /**
     * @var integer
     *
     * @ORM\Column(name="duree", type="integer", nullable=true)
     */
    private $duree;



    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set tarif
     *
     * @param string $tarif
     *
     * @return Formule
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;

        return $this;
    }

    /**
     * Get tarif
     *
     * @return string
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * Set duree
     *
     * @param integer $duree
     *
     * @return Formule
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return integer
     */
    public function getDuree()
    {
        return $this->duree;
    }
}

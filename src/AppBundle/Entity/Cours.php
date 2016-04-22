<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 *
 * @ORM\Table(name="cours")
 * @ORM\Entity
 */
class Cours
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_cours", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCours;

    /**
     * @var string
     *
     * @ORM\Column(name="type_cours", type="string", length=25, nullable=true)
     */
    private $typeCours;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_debut", type="datetime", nullable=true)
     */
    private $heureDebut;

    /**
     * @var integer
     *
     * @ORM\Column(name="duree", type="integer", nullable=true)
     */
    private $duree;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=25, nullable=true)
     */
    private $libelle;

    /**
     * @var boolean
     *
     * @ORM\Column(name="collectif", type="boolean", nullable=true)
     */
    private $collectif;



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
     * Set typeCours
     *
     * @param string $typeCours
     *
     * @return Cours
     */
    public function setTypeCours($typeCours)
    {
        $this->typeCours = $typeCours;

        return $this;
    }

    /**
     * Get typeCours
     *
     * @return string
     */
    public function getTypeCours()
    {
        return $this->typeCours;
    }

    /**
     * Set heureDebut
     *
     * @param \DateTime $heureDebut
     *
     * @return Cours
     */
    public function setHeureDebut($heureDebut)
    {
        $this->heureDebut = $heureDebut;

        return $this;
    }

    /**
     * Get heureDebut
     *
     * @return \DateTime
     */
    public function getHeureDebut()
    {
        return $this->heureDebut;
    }

    /**
     * Set duree
     *
     * @param integer $duree
     *
     * @return Cours
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

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Cours
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

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
     * Set collectif
     *
     * @param boolean $collectif
     *
     * @return Cours
     */
    public function setCollectif($collectif)
    {
        $this->collectif = $collectif;

        return $this;
    }

    /**
     * Get collectif
     *
     * @return boolean
     */
    public function getCollectif()
    {
        return $this->collectif;
    }
}

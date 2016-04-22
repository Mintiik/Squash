<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adherent
 *
 * @ORM\Table(name="adherent")
 * @ORM\Entity
 */
class Adherent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_inscription", type="date", nullable=true)
     */
    private $dateInscription;

    /**
     * @var boolean
     *
     * @ORM\Column(name="nouveau_adherent", type="boolean", nullable=true)
     */
    private $nouveauAdherent;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_casier", type="integer", nullable=true)
     */
    private $numCasier;



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
     * Set dateInscription
     *
     * @param \DateTime $dateInscription
     *
     * @return Adherent
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get dateInscription
     *
     * @return \DateTime
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set nouveauAdherent
     *
     * @param boolean $nouveauAdherent
     *
     * @return Adherent
     */
    public function setNouveauAdherent($nouveauAdherent)
    {
        $this->nouveauAdherent = $nouveauAdherent;

        return $this;
    }

    /**
     * Get nouveauAdherent
     *
     * @return boolean
     */
    public function getNouveauAdherent()
    {
        return $this->nouveauAdherent;
    }

    /**
     * Set numCasier
     *
     * @param integer $numCasier
     *
     * @return Adherent
     */
    public function setNumCasier($numCasier)
    {
        $this->numCasier = $numCasier;

        return $this;
    }

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

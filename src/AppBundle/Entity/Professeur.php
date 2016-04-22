<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Professeur
 *
 * @ORM\Table(name="professeur")
 * @ORM\Entity
 */
class Professeur
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
     * @var string
     *
     * @ORM\Column(name="type_professeur", type="string", length=25, nullable=true)
     */
    private $typeProfesseur;



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
     * Set typeProfesseur
     *
     * @param string $typeProfesseur
     *
     * @return Professeur
     */
    public function setTypeProfesseur($typeProfesseur)
    {
        $this->typeProfesseur = $typeProfesseur;

        return $this;
    }

    /**
     * Get typeProfesseur
     *
     * @return string
     */
    public function getTypeProfesseur()
    {
        return $this->typeProfesseur;
    }
}

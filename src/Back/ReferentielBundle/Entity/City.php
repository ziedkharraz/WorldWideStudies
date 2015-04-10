<?php

namespace Back\ReferentielBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * City
 *
 * @ORM\Table(name="wws_city")
 * @ORM\Entity
 */
class City
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=50)
     */
    private $libelle;
    
    /**
     * @ORM\ManyToOne(targetEntity="Country", inversedBy="Citys")
     */
    protected $country;


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
     * Set libelle
     *
     * @param string $libelle
     * @return City
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
    
    public function __toString()
    {
        return $this->libelle;
    }

    /**
     * Set country
     *
     * @param \Back\ReferentielBundle\Entity\Country $country
     * @return City
     */
    public function setCountry(\Back\ReferentielBundle\Entity\Country $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \Back\ReferentielBundle\Entity\Country 
     */
    public function getCountry()
    {
        return $this->country;
    }
}

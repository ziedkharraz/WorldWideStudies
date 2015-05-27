<?php

namespace Back\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HomePage
 *
 * @ORM\Table(name="wws_front_homepage")
 * @ORM\Entity
 */
class HomePage
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="title1", type="string", length=255)
     */
    private $title1;

    /**
     * @var string
     *
     * @ORM\Column(name="description1", type="string", length=255)
     */
    private $description1;

    /**
     * @var string
     *
     * @ORM\Column(name="title2", type="string", length=255)
     */
    private $title2;

    /**
     * @var string
     *
     * @ORM\Column(name="description2", type="string", length=255)
     */
    private $description2;

    /**
     * @var string
     *
     * @ORM\Column(name="title3", type="string", length=255)
     */
    private $title3;

    /**
     * @var string
     *
     * @ORM\Column(name="description3", type="string", length=255)
     */
    private $description3;

    /**
     * @var string
     *
     * @ORM\Column(name="title4", type="string", length=255)
     */
    private $title4;

    /**
     * @var string
     *
     * @ORM\Column(name="description4", type="string", length=255)
     */
    private $description4;

    /**
     * @ORM\OneToOne(targetEntity="Back\ReferentielBundle\Entity\Media", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $logo ;
    
    /**
     * @ORM\OneToOne(targetEntity="Back\ReferentielBundle\Entity\Media", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $photo ;
    /**
     * @ORM\OneToOne(targetEntity="Back\ReferentielBundle\Entity\Media", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $cercle ;


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
     * Set title1
     *
     * @param string $title1
     * @return HomePage
     */
    public function setTitle1($title1)
    {
        $this->title1 = $title1;

        return $this;
    }

    /**
     * Get title1
     *
     * @return string 
     */
    public function getTitle1()
    {
        return $this->title1;
    }

    /**
     * Set description1
     *
     * @param string $description1
     * @return HomePage
     */
    public function setDescription1($description1)
    {
        $this->description1 = $description1;

        return $this;
    }

    /**
     * Get description1
     *
     * @return string 
     */
    public function getDescription1()
    {
        return $this->description1;
    }

    /**
     * Set title2
     *
     * @param string $title2
     * @return HomePage
     */
    public function setTitle2($title2)
    {
        $this->title2 = $title2;

        return $this;
    }

    /**
     * Get title2
     *
     * @return string 
     */
    public function getTitle2()
    {
        return $this->title2;
    }

    /**
     * Set description2
     *
     * @param string $description2
     * @return HomePage
     */
    public function setDescription2($description2)
    {
        $this->description2 = $description2;

        return $this;
    }

    /**
     * Get description2
     *
     * @return string 
     */
    public function getDescription2()
    {
        return $this->description2;
    }

    /**
     * Set title3
     *
     * @param string $title3
     * @return HomePage
     */
    public function setTitle3($title3)
    {
        $this->title3 = $title3;

        return $this;
    }

    /**
     * Get title3
     *
     * @return string 
     */
    public function getTitle3()
    {
        return $this->title3;
    }

    /**
     * Set description3
     *
     * @param string $description3
     * @return HomePage
     */
    public function setDescription3($description3)
    {
        $this->description3 = $description3;

        return $this;
    }

    /**
     * Get description3
     *
     * @return string 
     */
    public function getDescription3()
    {
        return $this->description3;
    }

    /**
     * Set title4
     *
     * @param string $title4
     * @return HomePage
     */
    public function setTitle4($title4)
    {
        $this->title4 = $title4;

        return $this;
    }

    /**
     * Get title4
     *
     * @return string 
     */
    public function getTitle4()
    {
        return $this->title4;
    }

    /**
     * Set description4
     *
     * @param string $description4
     * @return HomePage
     */
    public function setDescription4($description4)
    {
        $this->description4 = $description4;

        return $this;
    }

    /**
     * Get description4
     *
     * @return string 
     */
    public function getDescription4()
    {
        return $this->description4;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return HomePage
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return HomePage
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set logo
     *
     * @param \Back\ReferentielBundle\Entity\Media $logo
     * @return HomePage
     */
    public function setLogo(\Back\ReferentielBundle\Entity\Media $logo = null)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return \Back\ReferentielBundle\Entity\Media
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set photo
     *
     * @param \Back\ReferentielBundle\Entity\Media $photo
     * @return HomePage
     */
    public function setPhoto(\Back\ReferentielBundle\Entity\Media $photo = null)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return \Back\ReferentielBundle\Entity\Media 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set cercle
     *
     * @param \Back\ReferentielBundle\Entity\Media $cercle
     * @return HomePage
     */
    public function setCercle(\Back\ReferentielBundle\Entity\Media $cercle = null)
    {
        $this->cercle = $cercle;

        return $this;
    }

    /**
     * Get cercle
     *
     * @return \Back\ReferentielBundle\Entity\Media 
     */
    public function getCercle()
    {
        return $this->cercle;
    }
}

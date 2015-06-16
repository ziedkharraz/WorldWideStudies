<?php

namespace Front\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormStep1
 *
 * @ORM\Table(name="wws_form_step1")
 * @ORM\Entity
 */
class FormStep1
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
     * @ORM\Column(name="firstName", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255)
     */
    private $lastName;

    /**
     * @var integer
     *
     * @ORM\Column(name="gender", type="integer")
     */
    private $gender;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthDate", type="date")
     */
    private $birthDate;

    /**
     * @var string
     *
     * @ORM\Column(name="natianality", type="string", length=255)
     */
    private $natianality;

    /**
     * @var string
     *
     * @ORM\Column(name="primaryPhone", type="string", length=255)
     */
    private $primaryPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="alternativePhone", type="string", length=255 , nullable=true)
     */
    private $alternativePhone;

    /**
     * @ORM\ManyToOne(targetEntity="Back\ReferentielBundle\Entity\Level")
     */
    protected $levelOfStudy;

    /**
     * @ORM\ManyToOne(targetEntity="Back\ReferentielBundle\Entity\Subject")
     */
    protected $subject;

    /**
     * @ORM\ManyToOne(targetEntity="Back\ReferentielBundle\Entity\PreferredIntake")
     */
    protected $preferredIntake;

    /**
     * @var string
     *
     * @ORM\Column(name="progressionUniversityDegree", type="string", length=255)
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private $progressionUniversityDegree;

    /**
     * @ORM\OneToOne(targetEntity="FormStep2", inversedBy="formStep1")
     * @ORM\JoinColumn(onDelete="CASCADE")
     * */
    private $formStep2;

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
     * Set firstName
     *
     * @param string $firstName
     * @return FormStep1
     */
    public function setFirstName($firstName)
    {
        $this->firstName=$firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return FormStep1
     */
    public function setLastName($lastName)
    {
        $this->lastName=$lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set gender
     *
     * @param integer $gender
     * @return FormStep1
     */
    public function setGender($gender)
    {
        $this->gender=$gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return integer 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     * @return FormStep1
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate=$birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime 
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set natianality
     *
     * @param string $natianality
     * @return FormStep1
     */
    public function setNatianality($natianality)
    {
        $this->natianality=$natianality;

        return $this;
    }

    /**
     * Get natianality
     *
     * @return string 
     */
    public function getNatianality()
    {
        return $this->natianality;
    }

    /**
     * Set primaryPhone
     *
     * @param string $primaryPhone
     * @return FormStep1
     */
    public function setPrimaryPhone($primaryPhone)
    {
        $this->primaryPhone=$primaryPhone;

        return $this;
    }

    /**
     * Get primaryPhone
     *
     * @return string 
     */
    public function getPrimaryPhone()
    {
        return $this->primaryPhone;
    }

    /**
     * Set alternativePhone
     *
     * @param string $alternativePhone
     * @return FormStep1
     */
    public function setAlternativePhone($alternativePhone)
    {
        $this->alternativePhone=$alternativePhone;

        return $this;
    }

    /**
     * Get alternativePhone
     *
     * @return string 
     */
    public function getAlternativePhone()
    {
        return $this->alternativePhone;
    }

    /**
     * Set progressionUniversityDegree
     *
     * @param string $progressionUniversityDegree
     * @return FormStep1
     */
    public function setProgressionUniversityDegree($progressionUniversityDegree)
    {
        $this->progressionUniversityDegree=$progressionUniversityDegree;

        return $this;
    }

    /**
     * Get progressionUniversityDegree
     *
     * @return string 
     */
    public function getProgressionUniversityDegree()
    {
        return $this->progressionUniversityDegree;
    }

    /**
     * Set levelOfStudy
     *
     * @param \Back\ReferentielBundle\Entity\Level $levelOfStudy
     * @return FormStep1
     */
    public function setLevelOfStudy(\Back\ReferentielBundle\Entity\Level $levelOfStudy=null)
    {
        $this->levelOfStudy=$levelOfStudy;

        return $this;
    }

    /**
     * Get levelOfStudy
     *
     * @return \Back\ReferentielBundle\Entity\Level 
     */
    public function getLevelOfStudy()
    {
        return $this->levelOfStudy;
    }

    /**
     * Set subject
     *
     * @param \Back\ReferentielBundle\Entity\Subject $subject
     * @return FormStep1
     */
    public function setSubject(\Back\ReferentielBundle\Entity\Subject $subject=null)
    {
        $this->subject=$subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return \Back\ReferentielBundle\Entity\Subject 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set preferredIntake
     *
     * @param \Back\ReferentielBundle\Entity\PreferredIntake $preferredIntake
     * @return FormStep1
     */
    public function setPreferredIntake(\Back\ReferentielBundle\Entity\PreferredIntake $preferredIntake=null)
    {
        $this->preferredIntake=$preferredIntake;

        return $this;
    }

    /**
     * Get preferredIntake
     *
     * @return \Back\ReferentielBundle\Entity\PreferredIntake 
     */
    public function getPreferredIntake()
    {
        return $this->preferredIntake;
    }

    /**
     * Set formStep2
     *
     * @param \Front\GeneralBundle\Entity\FormStep2 $formStep2
     * @return FormStep1
     */
    public function setFormStep2(\Front\GeneralBundle\Entity\FormStep2 $formStep2=null)
    {
        $this->formStep2=$formStep2;

        return $this;
    }

    /**
     * Get formStep2
     *
     * @return \Front\GeneralBundle\Entity\FormStep2 
     */
    public function getFormStep2()
    {
        return $this->formStep2;
    }

}

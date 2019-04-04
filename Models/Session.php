<?php



/**
 * Session
 */
class Session
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $datedebut;

    /**
     * @var \DateTime
     */
    private $datefin;

    /**
     * @var \Formation
     */
    private $formations;

    /**
     * @var \Professeur
     */
    private $professeurs;

    /**
     * @var \Salle
     */
    private $salles;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $salaries;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->salaries = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set datedebut
     *
     * @param \DateTime $datedebut
     *
     * @return Session
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;
    
        return $this;
    }

    /**
     * Get datedebut
     *
     * @return \DateTime
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set datefin
     *
     * @param \DateTime $datefin
     *
     * @return Session
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;
    
        return $this;
    }

    /**
     * Get datefin
     *
     * @return \DateTime
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Set formations
     *
     * @param \Formation $formations
     *
     * @return Session
     */
    public function setFormations(\Formation $formations = null)
    {
        $this->formations = $formations;
    
        return $this;
    }

    /**
     * Get formations
     *
     * @return \Formation
     */
    public function getFormations()
    {
        return $this->formations;
    }

    /**
     * Set professeurs
     *
     * @param \Professeur $professeurs
     *
     * @return Session
     */
    public function setProfesseurs(\Professeur $professeurs = null)
    {
        $this->professeurs = $professeurs;
    
        return $this;
    }

    /**
     * Get professeurs
     *
     * @return \Professeur
     */
    public function getProfesseurs()
    {
        return $this->professeurs;
    }

    /**
     * Set salles
     *
     * @param \Salle $salles
     *
     * @return Session
     */
    public function setSalles(\Salle $salles = null)
    {
        $this->salles = $salles;
    
        return $this;
    }

    /**
     * Get salles
     *
     * @return \Salle
     */
    public function getSalles()
    {
        return $this->salles;
    }

    /**
     * Add salary
     *
     * @param \salarie $salary
     *
     * @return Session
     */
    public function addSalary(\salarie $salary)
    {
        $this->salaries[] = $salary;
    
        return $this;
    }

    /**
     * Remove salary
     *
     * @param \salarie $salary
     */
    public function removeSalary(\salarie $salary)
    {
        $this->salaries->removeElement($salary);
    }

    /**
     * Get salaries
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSalaries()
    {
        return $this->salaries;
    }
}


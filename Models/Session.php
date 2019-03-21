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
     * @var \Formations
     */
    private $formations;

    /**
     * @var \Professeurs
     */
    private $professeurs;

    /**
     * @var \Salles
     */
    private $salles;


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
     * @param \Formations $formations
     *
     * @return Session
     */
    public function setFormations(\Formations $formations = null)
    {
        $this->formations = $formations;
    
        return $this;
    }

    /**
     * Get formations
     *
     * @return \Formations
     */
    public function getFormations()
    {
        return $this->formations;
    }

    /**
     * Set professeurs
     *
     * @param \Professeurs $professeurs
     *
     * @return Session
     */
    public function setProfesseurs(\Professeurs $professeurs = null)
    {
        $this->professeurs = $professeurs;
    
        return $this;
    }

    /**
     * Get professeurs
     *
     * @return \Professeurs
     */
    public function getProfesseurs()
    {
        return $this->professeurs;
    }

    /**
     * Set salles
     *
     * @param \Salles $salles
     *
     * @return Session
     */
    public function setSalles(\Salles $salles = null)
    {
        $this->salles = $salles;
    
        return $this;
    }

    /**
     * Get salles
     *
     * @return \Salles
     */
    public function getSalles()
    {
        return $this->salles;
    }
}


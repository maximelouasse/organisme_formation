<?php



/**
 * Formations
 */
class Formations
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var \DateTime
     */
    private $datedebut;

    /**
     * @var \DateTime
     */
    private $datefin;

    /**
     * @var float
     */
    private $coã»t;

    /**
     * @var \Professeurs
     */
    private $professeurs;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Formations
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set datedebut
     *
     * @param \DateTime $datedebut
     *
     * @return Formations
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
     * @return Formations
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
     * Set coã»t
     *
     * @param float $coã»t
     *
     * @return Formations
     */
    public function setCoã»t($coã»t)
    {
        $this->coã»t = $coã»t;
    
        return $this;
    }

    /**
     * Get coã»t
     *
     * @return float
     */
    public function getCoã»t()
    {
        return $this->coã»t;
    }

    /**
     * Set professeurs
     *
     * @param \Professeurs $professeurs
     *
     * @return Formations
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
}


<?php



/**
 * Formation
 */
class Formation
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
    private $co�t;

    /**
     * @var \Professeur
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
     * @return Formation
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
     * @return Formation
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
     * @return Formation
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
     * Set co�t
     *
     * @param float $co�t
     *
     * @return Formation
     */
    public function setCo�t($co�t)
    {
        $this->co�t = $co�t;
    
        return $this;
    }

    /**
     * Get co�t
     *
     * @return float
     */
    public function getCo�t()
    {
        return $this->co�t;
    }

    /**
     * Set professeurs
     *
     * @param \Professeur $professeurs
     *
     * @return Formation
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
}


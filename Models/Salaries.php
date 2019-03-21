<?php



/**
 * Salaries
 */
class Salaries
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
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $poste;

    /**
     * @var \Entreprises
     */
    private $entreprises;


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
     * @return Salaries
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Salaries
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set poste
     *
     * @param string $poste
     *
     * @return Salaries
     */
    public function setPoste($poste)
    {
        $this->poste = $poste;
    
        return $this;
    }

    /**
     * Get poste
     *
     * @return string
     */
    public function getPoste()
    {
        return $this->poste;
    }

    /**
     * Set entreprises
     *
     * @param \Entreprises $entreprises
     *
     * @return Salaries
     */
    public function setEntreprises(\Entreprises $entreprises = null)
    {
        $this->entreprises = $entreprises;
    
        return $this;
    }

    /**
     * Get entreprises
     *
     * @return \Entreprises
     */
    public function getEntreprises()
    {
        return $this->entreprises;
    }
}


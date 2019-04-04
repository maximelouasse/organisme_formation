<?php



/**
 * Salarie
 */
class Salarie
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
     * @var \Entreprise
     */
    private $entreprises;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $sessions;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sessions = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Salarie
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
     * @return Salarie
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
     * @return Salarie
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
     * @param \Entreprise $entreprises
     *
     * @return Salarie
     */
    public function setEntreprises(\Entreprise $entreprises = null)
    {
        $this->entreprises = $entreprises;
    
        return $this;
    }

    /**
     * Get entreprises
     *
     * @return \Entreprise
     */
    public function getEntreprises()
    {
        return $this->entreprises;
    }

    /**
     * Add session
     *
     * @param \session $session
     *
     * @return Salarie
     */
    public function addSession(\session $session)
    {
        $this->sessions[] = $session;
    
        return $this;
    }

    /**
     * Remove session
     *
     * @param \session $session
     */
    public function removeSession(\session $session)
    {
        $this->sessions->removeElement($session);
    }

    /**
     * Get sessions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSessions()
    {
        return $this->sessions;
    }
}


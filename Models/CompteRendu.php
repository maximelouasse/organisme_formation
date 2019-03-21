<?php



/**
 * CompteRendu
 */
class CompteRendu
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $commentaire;

    /**
     * @var \Professeurs
     */
    private $professeurs;

    /**
     * @var \Sessions
     */
    private $sessions;


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
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return CompteRendu
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    
        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set professeurs
     *
     * @param \Professeurs $professeurs
     *
     * @return CompteRendu
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
     * Set sessions
     *
     * @param \Sessions $sessions
     *
     * @return CompteRendu
     */
    public function setSessions(\Sessions $sessions = null)
    {
        $this->sessions = $sessions;
    
        return $this;
    }

    /**
     * Get sessions
     *
     * @return \Sessions
     */
    public function getSessions()
    {
        return $this->sessions;
    }
}


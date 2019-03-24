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
     * @var \Professeur
     */
    private $professeurs;
    /**
     * @var \Session
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
     * @param \Professeur $professeurs
     *
     * @return CompteRendu
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
     * Set sessions
     *
     * @param \Session $sessions
     *
     * @return CompteRendu
     */
    public function setSessions(\Session $sessions = null)
    {
        $this->sessions = $sessions;
    
        return $this;
    }
    /**
     * Get sessions
     *
     * @return \Session
     */
    public function getSessions()
    {
        return $this->sessions;
    }
}
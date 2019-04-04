<?php



/**
 * Participant
 */
class Participant
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Salarie
     */
    private $salaries;

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
     * Set salaries
     *
     * @param \Salarie $salaries
     *
     * @return Participant
     */
    public function setSalaries(\Salarie $salaries = null)
    {
        $this->salaries = $salaries;
    
        return $this;
    }

    /**
     * Get salaries
     *
     * @return \Salarie
     */
    public function getSalaries()
    {
        return $this->salaries;
    }

    /**
     * Set sessions
     *
     * @param \Session $sessions
     *
     * @return Participant
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


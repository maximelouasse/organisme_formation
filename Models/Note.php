<?php



/**
 * Note
 */
class Note
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $note;

    /**
     * @var \Formation
     */
    private $formations;

    /**
     * @var \Salarie
     */
    private $salaries;


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
     * Set note
     *
     * @param float $note
     *
     * @return Note
     */
    public function setNote($note)
    {
        $this->note = $note;
    
        return $this;
    }

    /**
     * Get note
     *
     * @return float
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set formations
     *
     * @param \Formation $formations
     *
     * @return Note
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
     * Set salaries
     *
     * @param \Salarie $salaries
     *
     * @return Note
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
}


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
     * @var \Formations
     */
    private $formations;

    /**
     * @var \Salaries
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
     * @param \Formations $formations
     *
     * @return Note
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
     * Set salaries
     *
     * @param \Salaries $salaries
     *
     * @return Note
     */
    public function setSalaries(\Salaries $salaries = null)
    {
        $this->salaries = $salaries;

        return $this;
    }

    /**
     * Get salaries
     *
     * @return \Salaries
     */
    public function getSalaries()
    {
        return $this->salaries;
    }
}


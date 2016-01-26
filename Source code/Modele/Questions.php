<?php
class Questions {
    private $idQuestion;
    private $idQcm;
	private $question;
	private $conteur;
    private $bonus;
	
	public function __construct($idQcm, $question) {
        $this->idQuestion = null;
        $this->idQcm = $idQcm;
		$this->question = $question;
		$this->conteur = 0;
        $this->bonus = 0;
    }

    /**
     * Gets the value of idQuestion.
     *
     * @return mixed
     */
    public function getIdQuestion()
    {
        return $this->idQuestion;
    }

    /**
     * Sets the value of idQuestion.
     *
     * @param mixed $idQuestion the id question
     *
     * @return self
     */
    public function setIdQuestion($idQuestion)
    {
        $this->idQuestion = $idQuestion;

        return $this;
    }

    /**
     * Gets the value of idQcm.
     *
     * @return mixed
     */
    public function getIdQcm()
    {
        return $this->idQcm;
    }

    /**
     * Sets the value of idQcm.
     *
     * @param mixed $idQcm the id qcm
     *
     * @return self
     */
    public function setIdQcm($idQcm)
    {
        $this->idQcm = $idQcm;

        return $this;
    }

    /**
     * Gets the value of question.
     *
     * @return mixed
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Sets the value of question.
     *
     * @param mixed $question the question
     *
     * @return self
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Gets the value of conteur.
     *
     * @return mixed
     */
    public function getConteur()
    {
        return $this->conteur;
    }

    /**
     * Sets the value of conteur.
     *
     * @param mixed $conteur the conteur
     *
     * @return self
     */
    public function setConteur($conteur)
    {
        $this->conteur = $conteur;

        return $this;
    }

    /**
     * Gets the value of bonus.
     *
     * @return mixed
     */
    public function getBonus()
    {
        return $this->bonus;
    }

    /**
     * Sets the value of bonus.
     *
     * @param mixed $bonus the bonus
     *
     * @return self
     */
    public function setBonus($bonus)
    {
        $this->bonus = $bonus;

        return $this;
    }
}
?>
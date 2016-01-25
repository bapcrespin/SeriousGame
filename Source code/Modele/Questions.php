<?php
class Questions {
    private $idQuestion;
    private $idQcm;
	private $question;
	private $idReponse;
	private $conteur;
	private $scoreQCM;
	
	public function __construct($idQuestion, $idQcm, $question, $idReponse, $conteur, $scoreQCM) {
        $this->idQuestion = $idQuestion;
        $this->idQcm = $idQcm;
		$this->question = $question;
		$this->idReponse = $idReponse;
		$this->conteur = 0;
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
     * Gets the value of idReponse.
     *
     * @return mixed
     */
    public function getIdReponse()
    {
        return $this->idReponse;
    }

    /**
     * Sets the value of idReponse.
     *
     * @param mixed $idReponse the id reponse
     *
     * @return self
     */
    public function setIdReponse($idReponse)
    {
        $this->idReponse = $idReponse;

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
     * Gets the value of scoreQCM.
     *
     * @return mixed
     */
    public function getScoreQCM()
    {
        return $this->scoreQCM;
    }

    /**
     * Sets the value of scoreQCM.
     *
     * @param mixed $scoreQCM the score q c m
     *
     * @return self
     */
    public function setScoreQCM($scoreQCM)
    {
        $this->scoreQCM = $scoreQCM;

        return $this;
    }
}
?>
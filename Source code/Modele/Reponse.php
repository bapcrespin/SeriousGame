<?php
	class Reponse {
		private $idReponse;
		private $reponse;
		private $idQuestion;
		private $correct;

		public function __construct($pIdQuestion, $pReponse) {
			$idReponse = null;
			$idQuestion = $pIdQuestion;
			$reponse = $pReponse;
			$correct = 0;
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
	     * Gets the value of reponse.
	     *
	     * @return mixed
	     */
	    public function getReponse()
	    {
	        return $this->reponse;
	    }

	    /**
	     * Sets the value of reponse.
	     *
	     * @param mixed $reponse the reponse
	     *
	     * @return self
	     */
	    public function setReponse($reponse)
	    {
	        $this->reponse = $reponse;

	        return $this;
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
     * Gets the value of correct.
     *
     * @return mixed
     */
    public function isCorrect()
    {
        return $this->correct;
    }

    /**
     * Sets the value of correct.
     *
     * @param mixed $correct the correct
     *
     * @return self
     */
    public function setCorrect($correct)
    {
        $this->correct = $correct;

        return $this;
    }
}
?>
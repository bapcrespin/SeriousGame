<?php
	class Reponse {
		private $idReponse;
		private $reponse;
		private $idQuestion;

		public function __construct($pIdReponse, $pIdQuestion, $pReponse) {
			$idReponse = $pIdReponse;
			$idQuestion = $pIdQuestion;
			$reponse = $pReponse;
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
	}
?>
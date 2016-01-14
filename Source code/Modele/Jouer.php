<?php
	class Jouer {
		private $idUser;
		private $idQcm;
		private $nbEssais;
		private $scoreQcm;
		private $valider;

		public function __construct($pIdUser, $pIdQcm) {
			$idUser = $pIdUser;
			$idQcm = $pIdQcm;
			$nbEssais = 0;
			$scoreQcm = 0;
			$valider = false;
		}

	    /**
	     * Gets the value of idUser.
	     *
	     * @return mixed
	     */
	    public function getIdUser()
	    {
	        return $this->idUser;
	    }

	    /**
	     * Sets the value of idUser.
	     *
	     * @param mixed $idUser the id user
	     *
	     * @return self
	     */
	    public function setIdUser($idUser)
	    {
	        $this->idUser = $idUser;

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
	     * Gets the value of nbEssais.
	     *
	     * @return mixed
	     */
	    public function getNbEssais()
	    {
	        return $this->nbEssais;
	    }

	    /**
	     * Sets the value of nbEssais.
	     *
	     * @param mixed $nbEssais the nb essais
	     *
	     * @return self
	     */
	    public function setNbEssais($nbEssais)
	    {
	        $this->nbEssais = $nbEssais;

	        return $this;
	    }

	    /**
	     * Gets the value of scoreQcm.
	     *
	     * @return mixed
	     */
	    public function getScoreQcm()
	    {
	        return $this->scoreQcm;
	    }

	    /**
	     * Sets the value of scoreQcm.
	     *
	     * @param mixed $scoreQcm the score qcm
	     *
	     * @return self
	     */
	    public function setScoreQcm($scoreQcm)
	    {
	        $this->scoreQcm = $scoreQcm;

	        return $this;
	    }

	    /**
	     * Gets the value of valider.
	     *
	     * @return mixed
	     */
	    public function getValider()
	    {
	        return $this->valider;
	    }

	    /**
	     * Sets the value of valider.
	     *
	     * @param mixed $valider the valider
	     *
	     * @return self
	     */
	    public function setValider($valider)
	    {
	        $this->valider = $valider;

	        return $this;
	    }
	}
?>
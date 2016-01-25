<?php
class QCM {
    private $idQcm;
	private $temps;
	private $bonus;
	private $valider;
	private $url;
	private $nom;
	
	
    public function __construct($pIdQcm, $pTemps, $pUrl, $pBonus, $pNom) {
        $this->idQcm = $pIdQcm;
        $this->temps = $pTemps;
		$this->bonus = $pBonus;
		$this->url = $pUrl;
		$this->valider = 0;
		$this->nom = $pNom;
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
     * Gets the value of temps.
     *
     * @return mixed
     */
    public function getTemps()
    {
        return $this->temps;
    }

    /**
     * Sets the value of temps.
     *
     * @param mixed $temps the temps
     *
     * @return self
     */
    public function setTemps($temps)
    {
        $this->temps = $temps;

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

    /**
     * Gets the value of valider.
     *
     * @return mixed
     */
    public function isValider()
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

    /**
     * Gets the value of url.
     *
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets the value of url.
     *
     * @param mixed $url the url
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Gets the value of nom.
     *
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Sets the value of nom.
     *
     * @param mixed $nom the nom
     *
     * @return self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
}
?>
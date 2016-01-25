<?php
class QCM {
    private $idQcm;
	private $temps;
	private $bonus;
	private $valider;
	private $url;
	
	
	
    public function __construct($idQcm, $temps, $url, $valider) {
        $this->idQcm = $idQcm;
        $this->temps = $temps;
		$this->bonus = 0;
		$this->url = $url;
		$this->valider = $valider;
    }
	
	public function __construct($idQcm, $temps, $bonus,, $url, $valider) {
        $this->idQcm = $idQcm;
        $this->temps = $temps;
		$this->bonus = $bonus;
		$this->url = $url;
		$this->valider = $valider;
    }
}
?>
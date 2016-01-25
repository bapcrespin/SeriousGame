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
		$this->conteur = $conteur;
		$this->scoreQCM = $scoreQCM;
    }
}
?>
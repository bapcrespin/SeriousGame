<?php 
	include_once("Modele/ModeleQCM.php");
	include_once("Modele/ModeleQuestions.php");

	class ControleurQcm {
		private $modeleQcm;
		private $modeleQuestions;

		public function __construct() {
			$this->$modeleQcm = new ModeleQcm();
			$this->$modeleQuestions = new ModeleQuestions();
		}

		public function ajouterQcm($nomQcm, $niveauQcm, $urlQcm, $tempsQcm, $nomQuestion, $reponse1, $reponse2, $reponse3, $reponse4, $reponse5, $idReponseJuste) {
			$qcm = $this->modeleQcm->ajouterQcm($nomQcm, $niveauQcm, $urlQcm, $tempsQcm);
		}
	}
 ?>
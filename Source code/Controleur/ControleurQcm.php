<?php 
	include_once("Modele/ModeleQCM.php");
	include_once("Modele/ModeleQuestions.php");
	include_once("Modele/ModeleReponse.php");

	class ControleurQcm {
		private $modeleQcm;
		private $modeleQuestions;
		private $modeleReponse;

		public function __construct() {
			$this->$modeleQcm = new ModeleQcm();
			$this->$modeleQuestions = new ModeleQuestions();
			$this->modeleReponse = new ModeleReponse();
		}

		public function ajouterQcm($niveauQcm, $tempsQcm, $urlQcm, $nomQcm, $nomQuestion, $reponse1, $reponse2, $reponse3, $reponse4, $reponse5, $idReponseJuste) {
			$this->modeleQcm->ajouterQcm($niveauQcm, $tempsQcm, $urlQcm, $nomQcm);
			$this->modeleQuestions->ajouterQuestion($this->modeleQcm.getIdQcm($nomQcm), $nomQuestion);
			if ($reponse1 <> null) {
				$this->modeleReponse->ajouterReponse($this->modeleQuestions.getIdQuestion($nomQuestion), $reponse1);
			}
			if ($reponse2 <> null) {
				$this->modeleReponse->ajouterReponse($this->modeleQuestions.getIdQuestion($nomQuestion), $reponse2);
			}
			if ($reponse3 <> null) {
				$this->modeleReponse->ajouterReponse($this->modeleQuestions.getIdQuestion($nomQuestion), $reponse3);
			}
			if ($reponse4 <> null) {
				$this->modeleReponse->ajouterReponse($this->modeleQuestions.getIdQuestion($nomQuestion), $reponse4);
			}
			if ($reponse5 <> null) {
				$this->modeleReponse->ajouterReponse($this->modeleQuestions.getIdQuestion($nomQuestion), $reponse5);
			}
		}
	}
 ?>
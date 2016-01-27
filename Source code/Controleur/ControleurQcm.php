<?php 
	include_once("Modele/ModeleQCM.php");
	include_once("Modele/ModeleQuestions.php");
	include_once("Modele/ModeleReponse.php");

	class ControleurQcm {
		private $modeleQcm;
		private $modeleQuestions;
		private $modeleReponse;

		public function __construct() {
			$this->modeleQcm = new ModeleQcm();
			$this->modeleQuestions = new ModeleQuestions();
			$this->modeleReponse = new ModeleReponse();
		}

		public function ajouterQcm($niveauQcm, $tempsQcm, $urlQcm, $nomQcm, $nomQuestion, $reponse1, $reponse2, $reponse3, $reponse4, $reponse5, $idReponseJuste) {
			
			$this->modeleQcm->ajouterQcm($niveauQcm, $tempsQcm, $urlQcm, $nomQcm);
			$this->modeleQuestions->ajouterQuestion($this->modeleQcm.getIdQcm($nomQcm), $nomQuestion);
			// on vérifie si la reponse est vide si non on cree un objet question
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

			// mettre quelle reponse est correct
			if ($idReponseJuste == 1) {
				$rep = $this->modeleReponse.getReponse($reponse1);
				$rep.setCorrect(1);
			} else if ($idReponseJuste == 2) {
				$rep = $this->modeleReponse.getReponse($reponse2);
				$rep.setCorrect(1);
			} else if ($idReponseJuste == 3) {
				$rep = $this->modeleReponse.getReponse($reponse3);
				$rep.setCorrect(1);
			} else if ($idReponseJuste == 4) {
				$rep = $this->modeleReponse.getReponse($reponse4);
				$rep.setCorrect(1);
			} else if ($idReponseJuste == 5) {
				$rep = $this->modeleReponse.getReponse($reponse5);
				$rep.setCorrect(1);
			}
			
		}

		public function ajouterQcmForm() {
			include 'Vue/VueInsererQcm.php';
		}

		public function lancerVideo($idQcm) {
			$nomQcm = $this->modeleQcm->getNomQcm($idQcm);
			$codeVideo = $this->modeleQcm->getCodeVideoQcm($idQcm);
			include 'Vue/VueVideo.php';
		}

		public function lancerQcm($idQcm) {
			include 'Vue/VueQcm.php';
		}

	}
 ?>
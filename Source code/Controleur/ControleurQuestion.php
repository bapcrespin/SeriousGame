<?php 
	include_once("./Modele/ModeleQCM.php");
	include_once("./Modele/ModeleQuestions.php");
	include_once("./Modele/ModeleReponse.php");

	class ControleurQuestion {
		private $modeleQcm;
		private $modeleQuestion;
		private $modeleReponse;

		public function __construct() {
			$this->modeleQcm = new ModeleQcm();
			$this->modeleQuestion = new ModeleQuestions();
			$this->modeleReponse = new ModeleReponse();
		}

		public function ajouterQuestionForm() {
			$listeQcm = $this->modeleQcm->getAllQcm();
			include './Vue/VueInsererQuestion.php';
		}

		public function ajouterQuestion($idQcm, $nom, $reponse1, $reponse2, $reponse3, $reponse4, $reponse5, $idReponseJuste) {
			$this->modeleQuestion->ajouterQuestion($idQcm, $nom);

			// on vérifie si la reponse est vide si non on cree un objet question
			if ($reponse1 <> null) {
				$this->modeleReponse->ajouterReponse($this->modeleQuestion->getIdQuestion($nom), $reponse1);
			}
			if ($reponse2 <> null) {
				$this->modeleReponse->ajouterReponse($this->modeleQuestion->getIdQuestion($nom), $reponse2);
			}
			if ($reponse3 <> null) {
				$this->modeleReponse->ajouterReponse($this->modeleQuestion->getIdQuestion($nom), $reponse3);
			}
			if ($reponse4 <> null) {
				$this->modeleReponse->ajouterReponse($this->modeleQuestion->getIdQuestion($nom), $reponse4);
			}
			if ($reponse5 <> null) {
				$this->modeleReponse->ajouterReponse($this->modeleQuestion->getIdQuestion($nom), $reponse5);
			}

			// mettre quelle reponse est correct
			if ($idReponseJuste == 1) {
				$rep = $this->modeleReponse->getIdReponse($reponse1);
				$this->modeleReponse->setCorrect($rep);
			} else if ($idReponseJuste == 2) {
				$rep = $this->modeleReponse->getIdReponse($reponse2);
				$this->modeleReponse->setCorrect($rep);
			} else if ($idReponseJuste == 3) {
				$rep = $this->modeleReponse->getIdReponse($reponse3);
				$this->modeleReponse->setCorrect($rep);
			} else if ($idReponseJuste == 4) {
				$rep = $this->modeleReponse->getIdReponse($reponse4);
				$this->modeleReponse->setCorrect($rep);
			} else if ($idReponseJuste == 5) {
				$rep = $this->modeleReponse->getIdReponse($reponse5);
				$this->modeleReponse->setCorrect($rep);
			}
		}
	}
 ?>
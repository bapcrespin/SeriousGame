<?php 
	include_once("./Modele/ModeleQCM.php");
	include_once("./Modele/ModeleQuestions.php");
	include_once("./Modele/ModeleReponse.php");

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
			$idQcm = $this->modeleQcm->getIdQcm($nomQcm);
			$this->modeleQuestions->ajouterQuestion($idQcm, $nomQuestion);
			$this->modeleQuestions->setBonus($this->modeleQuestions->getIdQuestion($nomQuestion));
			// on vérifie si la reponse est vide si non on cree un objet question
			if ($reponse1 <> null) {
				$this->modeleReponse->ajouterReponse($this->modeleQuestions->getIdQuestion($nomQuestion), $reponse1);
			}
			if ($reponse2 <> null) {
				$this->modeleReponse->ajouterReponse($this->modeleQuestions->getIdQuestion($nomQuestion), $reponse2);
			}
			if ($reponse3 <> null) {
				$this->modeleReponse->ajouterReponse($this->modeleQuestions->getIdQuestion($nomQuestion), $reponse3);
			}
			if ($reponse4 <> null) {
				$this->modeleReponse->ajouterReponse($this->modeleQuestions->getIdQuestion($nomQuestion), $reponse4);
			}
			if ($reponse5 <> null) {
				$this->modeleReponse->ajouterReponse($this->modeleQuestions->getIdQuestion($nomQuestion), $reponse5);
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

		public function ajouterQcmForm() {
			include './Vue/VueInsererQcm.php';
		}

		public function lancerVideo($idQcm) {
			$nomQcm = $this->modeleQcm->getNomQcm($idQcm);
			$codeVideo = $this->modeleQcm->getCodeVideoQcm($idQcm);
			include 'Vue/VueVideo.php';
		}

		public function lancerQcm($idQcm) {
			$nomQcm = $this->modeleQcm->getNomQcm($idQcm);
			include 'Vue/VueQcm.php';
			$listeQuestions = $this->modeleQuestions->getQuestions($idQcm);
			$numQuestion =  1 ;
			foreach ($listeQuestions as $question) {
				if ($question->getBonus() == 0){
					include 'Vue/VueQuestion.php';
					$idQuestion = $this->modeleQuestions->getIdQuestion($question->getQuestion());
					$listeReponses = $this->modeleReponse->getListeReponsesParQuestion($idQuestion);
					$numReponse =  1 ;
					foreach ($listeReponses as $reponse) {
						include 'Vue/VueReponse.php';
						$numReponse ++ ;
					}
					include 'Vue/VueQuestionFin.php';
					$numQuestion ++ ;
				}
			}
			foreach ($listeQuestions as $question) {
				if ($question->getBonus() == 1){
					include 'Vue/VueQuestion.php';
					$idQuestion = $this->modeleQuestions->getIdQuestion($question->getQuestion());
					$listeReponses = $this->modeleReponse->getListeReponsesParQuestion($idQuestion);
					$numReponse =  1 ;
					foreach ($listeReponses as $reponse) {
						include 'Vue/VueReponse.php';
						$numReponse ++ ;
					}
					include 'Vue/VueQuestionFin.php';
					$numQuestion ++ ;
				}
			}
			include 'Vue/VueQcmFin.php';
		}

	}
 ?>
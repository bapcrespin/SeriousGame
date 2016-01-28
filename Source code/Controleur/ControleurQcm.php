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
			$bonus = 0 ;
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
			include 'Vue/VueQcmFin.php';
		}

		public function lancerQcmBonus($idQcm) {
			$bonus = 1 ;
			$nomQcm = $this->modeleQcm->getNomQcm($idQcm);
			include 'Vue/VueQcm.php';
			$listeQuestions = $this->modeleQuestions->getQuestions($idQcm);
			$numQuestion =  1 ;
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

		public function resultatQcm($question1, $question2, $question3, $question4, $question5, $questionBonus, $reponse1, $reponse2, $reponse3, $reponse4, $reponse5, $reponseBonus) {
			// Traitement question 1
			$idQ1 = $this->modeleQuestions->getIdQuestion($question1);
			$listeReponseQuestion1 = $this->modeleReponse->getListeReponsesParQuestion($idQ1);
			$r1 = 0;
			foreach ($listeReponseQuestion1 as $value) {
				if (($value.getName() == $reponse1) && ($value.isCorrect() == 1)) {
					$r1 = 1;
				}
			}

			// Traitement question 2
			$idQ2 = $this->modeleQuestions->getIdQuestion($question2);
			$listeReponseQuestion2 = $this->modeleReponse->getListeReponsesParQuestion($idQ2);
			$r2 = 0;
			foreach ($listeReponseQuestion2 as $value) {
				if (($value.getName() == $reponse2) && ($value.isCorrect() == 1)) {
					$r2 = 1;
				}
			}

			// Traitement question 3
			$idQ3 = $this->modeleQuestions->getIdQuestion($question3);
			$listeReponseQuestion3 = $this->modeleReponse->getListeReponsesParQuestion($idQ3);
			$r3 = 0;
			foreach ($listeReponseQuestion3 as $value) {
				if (($value.getName() == $reponse3) && ($value.isCorrect() == 1)) {
					$r3 = 1;
				}
			}

			// Traitement question 4
			$idQ4 = $this->modeleQuestions->getIdQuestion($question4);
			$listeReponseQuestion4 = $this->modeleReponse->getListeReponsesParQuestion($idQ4);
			$r4 = 0;
			foreach ($listeReponseQuestion4 as $value) {
				if (($value.getName() == $reponse4) && ($value.isCorrect() == 1)) {
					$r4 = 1;
				}
			}

			// Traitement question 5
			$idQ5 = $this->modeleQuestions->getIdQuestion($question5);
			$listeReponseQuestion5 = $this->modeleReponse->getListeReponsesParQuestion($idQ5);
			$r5 = 0;
			foreach ($listeReponseQuestion5 as $value) {
				if (($value.getName() == $reponse5) && ($value.isCorrect() == 1)) {
					$r5 = 1;
				}
			}

			// Traitement question bonus
			$idQBonus = $this->modeleQuestions->getIdQuestion($questionBonus);
			$listeReponseQuestionBonus = $this->modeleReponse->getListeReponsesParQuestion($idQBonus);
			$rBonus = 0;
			foreach ($listeReponseQuestionBonus as $value) {
				if (($value.getName() == $reponseBonus) && ($value.isCorrect() == 1)) {
					$rBonus = 1;
				}
			}

			include 'Vue/VueResultatQcm.php';
		}

	}
 ?>
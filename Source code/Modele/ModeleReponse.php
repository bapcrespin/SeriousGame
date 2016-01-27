<?php
	include_once("Reponse.php");
	include_once("./include/connect.inc.php");

	class ModeleReponse {

		public function getListeReponsesParQuestion($pIdQuestion) {
			global $conn;
			$res = $conn->prepare("Select * from Reponses where idQuestion = :pIdQuestion");
			$res->execute(array('pIdQuestion' => $pIdQuestion));
			foreach ($res as $rep) {
				$listeReponses[] = new Reponse($rep["idReponse"], $rep["idQuestion"], $rep["reponse"]);
			}
			return $listeReponses;
		}

		public function getReponse($nom) {
			global $conn;
			$res = $conn->prepare("Select * from Reponses where reponse = :pReponse");
			$res->execute(array('pReponse' => $nom));
			$rep = $res->fetch();
			$uneReponse = new Reponse($rep["idQuestion"], $rep["reponse"]);
	        return $uneReponse;
		}

		public function getIdReponse($nom) {
			global $conn;
			$res = $conn->prepare("Select * from Reponses where reponse = :pReponse");
			$res->execute(array('pReponse' => $nom));
			$rep = $res->fetch();
			return $rep['idReponse'];
		}

		public function ajouterReponse($pIdQuestion, $pReponse) {
			global $conn;
			$res = $conn->prepare("Insert into Reponses (idQuestion, reponse) values (:pIdQuestion, :pReponse)");
			$res->execute(array( ':pIdQuestion' => $pIdQuestion, 'pReponse' => $pReponse));
		}

		public function setCorrect($idReponse) {
			global $conn;
			$res = $conn->prepare("Update Reponses set correct = 1 where idReponse = :pIdReponse");
			$res->execute(array('pIdReponse' => $idReponse));
		}
	}
?>
<?php
	include_once("Reponse.php");
	include_once("../include/connect.inc.php");

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

		public function getReponse($pIdReponse) {
			global $conn;
			$res = $conn->prepare("Select * from Reponses where idReponse = :pIdReponse");
			$res->execute(array('pIdReponse' => $idReponse));
			$rep = $res->fetch();
			$uneReponse = new Reponse($rep["idReponse"], $rep["idQuestion"], $rep["reponse"]);
	        return $uneReponse;
		}
	}
?>
<?php
include_once("Questions.php"); 
include_once("./include/connect.inc.php");

class ModeleQuestions {
	
	public function getQuestions($pIdQcm) {
		global $conn;
		$res = $conn->prepare("Select * from Questions where idQcm = :pIdQcm");
		$conn->execute(array("pIdQcm" => $pIdQcm));
		foreach ($question as $res) {
			$listeQuestions = new Questions($question["idQuestion"], $question["idQcm"], $question["question"], $question["idReponse"], $question["conteur"]);
		}
		return $listeQuestions;
	}

	public function ajouterQuestion($idQcm, $question) {
		global $conn;
		$res = $conn->prepare("Insert into Questions (idQcm, question) values(:pIdQcm, :pNomQuestion)");
		$conn->execute(array("pIdQcm" => $idQcm, "pNomQuestion" => $question));
	}

	public function getIdQuestion($nom) {
		global $conn;
		$res = $conn->prepare("Select * from Questions where question = :pNom");
		$res->prepare(array('pNom' => $nom));
		$q = $res->fetch();
		return $q['idQuestion'];
	}
}
?>
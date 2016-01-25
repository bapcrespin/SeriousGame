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
}
?>
<?php
	include_once("Jouer.php");
	include_once("./include/connect.inc.php");

	class ModeleJouer {
		
		public function getScoreQcm($mail, $idQcm){
			global $conn;
			$res = $conn->prepare("Select * from Jouer Where mail = '".$mail."' And idQcm ='".$idQcm."';");
			$res->execute();
			$uti = $res->fetch();
			return $uti["scoreQcm"];
		}
		
		public function insererScore($mail, $idQcm, $score){
			global $conn;
			$res = $conn->prepare("Insert Into Jouer (mail, idQcm, scoreQcm) Values ('".$mail."', '".$idQcm."','".$score."');");
			$res->execute();
		}
		
		public function modifierScore($mail, $idQcm, $score){
			global $conn;
			$res = $conn->prepare("UPDATE Jouer SET scoreQcm = '".$score."' Where mail = '".$mail."' And idQcm = '".$idQcm."';");
			$res->execute();
		}
	}
?>

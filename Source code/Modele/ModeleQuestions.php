<?php
include_once("Questions.php"); 
include_once("./include/connect.inc.php");

class ModeleQuestions {
    
	public function getIdQuestion(){
		return this.idQuestion;
	}
	
	public function getIdQcm(){
		return this.idQcm;
	}
	
	public function getQuestion(){
		return this.question;
	}
	
	public function getIdReponse(){
		return this.idReponse;
	}
	
	public function getConteur(){
		return this.conteur;
	}
	
	public function getscoreQCM(){
		return this.scoreQCM;
	}
	
	public function getscoreQCM(){
		return this.scoreQCM;
	}
	
    public function getQcm($idQcm) {
		global $conn;
		$res = $conn->prepare("Select * from QCM where idQcm = :pIdQcm");
		$res->execute(array('pIdQcm' => $idQcm));
		$qcm = $res->fetch();
		$unQcm = new QCM($qcm["idQcm"], $qcm["temps"], $qcm["bonus"], $qcm["valider"], $qcm["url"]);
        return $unQCM;
    }	
}
?>
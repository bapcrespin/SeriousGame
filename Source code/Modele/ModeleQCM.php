<?php
include_once("QCM.php"); 
include_once("./include/connect.inc.php");

class ModeleCategorie {
    
	public function getId(){
		return this.idQcm;
	}
	
	public function getTemps(){
		return this.temps;
	}
	
	public function getBonus(){
		return this.bonus;
	}
	
	public function getValider(){
		return this.valider;
	}
	
	public function incrementerScoreTotal($score){
		this.scoreTotal= this.scoreTotal + $score;
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
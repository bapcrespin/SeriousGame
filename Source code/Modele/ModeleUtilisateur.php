<?php
include_once("Utilisateurs.php"); 
include_once("./include/connect.inc.php");

class ModeleUtilisateur {
    
	public function getId(){
		return this.idUser;
	}
	
	public function getmdp(){
		return this.mdp;
	}
	
	public function getScoreTotal(){
		return this.scoreTotal;
	}
	
	public function getAvatar(){
		return this.avatar;
	}
	
	public function incrementerScoreTotal($score){
		//this.scoreTotal = this.scoreTotal + $score ;
	}
	
	public function getListeUtilisateurs() {
		global $conn;
		$res = $conn->prepare("Select * from Utilisateurs");
		$res->execute();			
		foreach($res as $uti) {
		    $ListeUti[] = Utilisateurs::__construct_all($uti["mail"], $uti["mdp"], $uti["avatar"], $uti["scoreTotal"]);
 		}
		return $ListeUti; 
    }

	public function creerUtilisateur($mail, $mdp) {
		global $conn;
		$res = $conn->prepare("INSERT INTO Utilisateurs VALUES('".$mail."', '".$mdp."','',0)");
		$res->execute();
	}
	
    public function getUtilisateur($mail) {
		global $conn;
		$res = $conn->prepare("Select * from Utilisateurs where mail = :pMail");
		$res->execute(array('pMail' => $mail));
		$uti = $res->fetch();
		$unUtilisateur = Utilisateurs::__construct_all($uti["mail"], $uti["mdp"], $uti["avatar"], $uti["scoreTotal"]);
        return $unUtilisateur;
    }

}
?>
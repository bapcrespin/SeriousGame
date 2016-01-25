<?php
include_once("Utilisateurs.php"); 
include_once("./include/connect.inc.php");

class ModeleCategorie {
    
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
		this.scoreTotal= this.scoreTotal + $score;
	}
	
	public function getListeUtilisateurs() {
		global $conn;
		$res = $conn->prepare("Select * from Utilisateurs");
		$res->execute();			
		foreach($res as $uti) {
		    $ListeUti[] = new Utilisateurs($uti["idUti"], $uti["mdp"], $uti["avatar"], $uti["scoreTotal"], $uti["mail"]);
 		}
		return $ListeUti; 
    }
	
	public function creerUtilisateur($idUti, $mdp, $mail) {
		global $conn;
		$res = $conn->prepare("INSERT INTO table Utilisateurs VALUES(':idEtu', ':mdp','',0,':mail')");
		$res ->bindParam(':idUti', $idUti);
		$res ->bindParam(':mdp', $idUti);
		$res ->bindParam(':mail', $mail);
		$res->execute();
	}
	
    public function getUtilisateur($idUti) {
		global $conn;
		$res = $conn->prepare("Select * from Utilisateurs where idUti = :pIdUti");
		$res->execute(array('pIdUti' => $idUti));
		$uti = $res->fetch();
		$unUtilisateur = new Utilisateurs($uti["idUti"], $uti["mdp"], $uti["avatar"], $uti["scoreTotal"], $uti["mail"]);
        return $unUtilisateur;
    }	
}
?>
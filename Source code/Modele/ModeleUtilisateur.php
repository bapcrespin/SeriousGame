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

	public function modifScoreUtilisateur($mail){
		global $conn;
		$res = $conn->prepare('Update Utilisateurs set scoreTotal ='.$_SESSION["scoreTotal"].' where mail = "'.$mail.'";');
		$res->execute();
	}

	public function getScore($mail){
		global $conn;
		$res = $conn->prepare("Select * from Utilisateurs where mail = '".$mail."';");
		$res->execute();
		$uti = $res->fetch();
		return $uti["scoreTotal"];
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
		$res = $conn->prepare("INSERT INTO Utilisateurs VALUES('".$mail."', '".$mdp."','images/default.png',0)");
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

    public function modifMdp($pmail, $pmdp) {
	    global $conn;
	    $res = $conn->prepare("Update Utilisateurs set mdp = '".$pmdp ."' where mail='".$pmail."';");
	    $res->execute();
	}

	public function modifAvatar($pmail, $pavatar) {
	    global $conn;
	    $res = $conn->prepare("Select Utilisateurs set avatar = :pavatar where mail = :pmail");
	    $res->execute(array('pmail' => $pmail, 'pavatar' => $pavatar));
	}

}
?>
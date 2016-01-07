<?php
include_once("Utilisateurs.php"); 
include_once("./include/connect.inc.php");

class ModeleCategorie {
    
	public function getListeUtilisateurs() {
		global $conn;
		$res = $conn->prepare("Select * from Utilisateurs");
		$res->execute();			
		foreach($res as $uti) {
		    $ListeUti[] = new Utilisateurs($uti["idUti"], $uti["mdp"], $uti["avatar"], $uti["scoreTotal"], $uti["mail"]);
 		}
		return $ListeUti; 
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
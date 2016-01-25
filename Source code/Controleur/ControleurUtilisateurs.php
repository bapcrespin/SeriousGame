<?php
include_once("Modele/ModeleUtilisateurs.php");
class ControleurUtilisateurs {
	
    private $modeleUti;
	
    public function __construct() {
          $this->modeleUti = new ModeleUtilisateurs();
    }
	
	public function getListeUtilisateurs() {
        $vListeUtilisateurs = $this->modeleUti->getListeUtilisateurs();
        include 'Vue/VueListeUtilisateurs.php';
	}

	
    public function getUtilisateur($idUti) {
		$vUti = $this->modeleUti->getUtilisateur($idUti);
        include 'Vue/VueUtilisateurs.php';
    }

    public function creerUtilisateur($idUti, $mdp, $mail) {
        $vCreerUti = $this->modeleUti->creerUtilisateur($idUti, $mdp, $mail);
        include 'Vue/VueInscription.php';
    }
	   
}
?>
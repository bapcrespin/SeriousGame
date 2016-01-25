<?php
include_once("Modele/ModeleUtilisateur.php");
class ControleurUtilisateur {
	
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

    public function creerUtilisateur($mail, $mdp) {
        include 'Vue/VueInscription.php';
        $vCreerUti = $this->modeleUti->creerUtilisateur($mail, $mdp);
    }
	   
}
?>
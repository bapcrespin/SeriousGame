<?php
include_once("Modele/ModeleUtilisateur.php");
class ControleurUtilisateur {
	
    private $modeleUti;
	
    public function __construct() {
          $this->modeleUti = new ModeleUtilisateur();
    }
	
	public function getListeUtilisateurs() {
        $vListeUtilisateurs = $this->modeleUti->getListeUtilisateurs();
        include 'Vue/VueListeUtilisateurs.php';
	}

	
    public function getUtilisateur($idUti) {
		$vUti = $this->modeleUti->getUtilisateur($idUti);
        include 'Vue/VueUtilisateurs.php';
    }

    public function inscription() {
        include ('./Vue/VueInscription.php');
    }

    public function profil() {
        include ('./Vue/VueProfil.php');
    }

    public function modifProfilForm() {
        include ('./Vue/VueModifProfil.php');
    }

    public function modifProfil($mail,$mdp) {
        
            $vUtiMdp = $this->modeleUti->modifMdp($mail, $mdp);
            //$vUtiAvatar = $this->modeleUti->modifAvatar($mail);
        
         include ('./Vue/VueProfil.php');
    }

    public function voirMonde(){
        include('./Vue/VueMonde.php');
    }

    public function voirParcours1(){
        include('./Vue/VueParcours1.php');
    }

    public function creerUtilisateur($mail, $mdp, $mdp2) {
        include ('./Vue/VueInscription.php');
        if (preg_match("*@*", $mail)) {
            if (strcmp($mdp, $mdp2) == 0 ){
                $vCreerUti = $this->modeleUti->creerUtilisateur($mail, $mdp);
                echo '<div class="alert alert-success" role="alert">Inscription réussie.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Les mots de passe de correspondent pas.</div>';
            }
        } else {
            echo '<div class="alert alert-danger" role="alert">L\'adresse mail est invalide.</div>';
        }
    }

    public function initScore($mail) {
        return $this->modeleUti->getScore($mail);
    }
}
?>
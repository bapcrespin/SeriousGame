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

    public function creerUtilisateur($mail, $mdp, $mdp2) {
        include ('./Vue/VueInscription.php');
        if (preg_match("*@*", $mail)) {
            if (strcmp($mdp, $mdp2) == 0 ){
                $vCreerUti = $this->modeleUti->creerUtilisateur($mail, $mdp);
                header('location:index.php');
            } else {
                echo '<div class="alert alert-danger" role="alert">Les mots de passe de correspondent pas.</div>';
            }
        } else {
            echo '<div class="alert alert-danger" role="alert">L\'adresse mail est invalide.</div>';
        }
    }
}
?>
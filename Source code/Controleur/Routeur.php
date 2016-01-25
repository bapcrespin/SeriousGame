<?php
require_once 'Controleur/ControleurUtilisateur.php';

class Routeur {
    // Route une requête entrante : exécution la bonne méthode de contrôleur en fonction de l'URL 
    public function routerRequete() {
		// s'il y a un parametre 'entite'
        if (isset($_GET['entite'])) {
			// on détermine avec quelle entité on veut travailler
			switch($_GET['entite']) {
				case 'inscription' : 
					$ctrlUser = new ControleurUtilisateur();
					$ctrlUser->inscription();
					break;
				case 'inscriptionOK' : 
					$ctrlUser = new ControleurUtilisateur();
					$ctrlUser->creerUtilisateur($_POST['email'], $_POST['password'], $_POST['vpassword']);
					break;	
					
				default: 	// pour toutes les autres valeurs du parametre 'entite' 
					include ("./Vue/VueAccueil.php");
					break;			
			}
		} else {
			include ("./Vue/VueAccueil.php");
		}

    }
}

<?php
require_once 'Controleur/ControleurUtilisateur.php';
require_once 'Controleur/ControleurQcm.php';

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
				case 'qcm':
					if (isset($_GET['action']) {
						switch($_GET['action']) {
							case 'C':
								$nom = $_POST['nom'];
								$niveau = $_POST['niveau'];
								$url = $_POST['url'];
								$temps = $_POST['temps'];
								$questionBonus = $_POST['question'];
								$reponse1 = $_POST['reponse1'];
								$reponse2 = $_POST['reponse2'];
								$reponse3 = $_POST['reponse3'];
								$reponse4 = $_POST['reponse4'];
								$reponse5 = $_POST['reponse5'];
								$bonneReponse = $_POST['idReponse'];
								$ctrlQcm = new ControleurQcm();
								$ctrlQcm->ajouterQcm($niveau, $temps, $url, $nom, $questionBonus, $reponse1, $reponse2, $reponse3, $reponse4, $reponse5, $bonneReponse);
								break;
						}
					}
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

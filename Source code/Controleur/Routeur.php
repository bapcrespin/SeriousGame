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
				case 'profil':
				if (isset($_GET['action'])) {
					switch($_GET['action']) {
						case 'R':
							$ctrlUser = new ControleurUtilisateur();
							$ctrlUser->profil();
							break;
						case 'U':
							$ctrlUser = new ControleurUtilisateur();
							$ctrlUser->Modifprofil();
							break;
					}
				}
				case 'qcm':
					if (isset($_GET['action'])) {
						switch($_GET['action']) {
							case 'C':
								$ctrlQcm = new ControleurQcm();
								$ctrlQcm->ajouterQcmForm();
								if (isset($_POST['envoyer'])) {
									$ctrlQcm->ajouterQcm($_POST['niveau'], $_POST['temps'], $_POST['url'], $_POST['nom'], $_POST['question'], $_POST['reponse1'], $_POST['reponse2'], $_POST['reponse3'], $_POST['reponse4'], $_POST['reponse5'], $_POST['idReponse']);
									}
								break;
							case 'V':
								if (isset($_GET['id'])) {
									$ctrlQcm = new ControleurQcm();
									$ctrlQcm->lancerVideo($_GET['id']);
								}
								break;
							case 'L':
								if (isset($_GET['id'])) {
									$ctrlQcm = new ControleurQcm();
									$ctrlQcm->lancerQcm($_GET['id']);
								}
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

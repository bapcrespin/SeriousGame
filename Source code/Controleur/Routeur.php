<?php
require_once 'Controleur/ControleurUtilisateur.php';
require_once 'Controleur/ControleurQcm.php';
require_once 'Controleur/ControleurQuestion.php';

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
							$ctrlUser->modifProfilForm();
							break;
						case 'Uok':
						if (strcmp($_POST['mdp'], $_POST['confirm']) == 0 ){
							$ctrlUser = new ControleurUtilisateur();
							$ctrlUser->modifProfil($_SESSION['id'], $_POST['mdp']);
						} else {
            				echo "<br/><h4>Les mots de passe de correspondent pas.</h4>";
        				}
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
									echo '<div class="alert alert-success" role="alert">Qcm ajouté</div>';
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
							case 'LB':
								if (isset($_GET['id'])) {
									$ctrlQcm = new ControleurQcm();
									$ctrlQcm->lancerQcmBonus($_GET['id']);
								}
								break;
							case 'R':
								include 'Vue/VueResultatQcm.php';
								break;
<<<<<<< .mine							case 'LB':
								if (isset($_GET['id'])) {
									$ctrlQcm = new ControleurQcm();
									$ctrlQcm->lancerQcmBonus($_GET['id']);
								}
								break;
=======							case 'R':
								include 'Vue/VueResultatQcm.php';
								break;
>>>>>>> .theirs						}
					}
					break;
				case 'question':
					if (isset($_GET['action'])) {
						switch($_GET['action']) {
							case 'C':
								$ctrlQuestion = new ControleurQuestion();
								$ctrlQuestion->ajouterQuestionForm();
								if (isset($_POST['envoyer'])) {
									$ctrlQuestion->ajouterQuestion($_POST['idQcm'], $_POST['nom'], $_POST['reponse1'], $_POST['reponse2'], $_POST['reponse3'], $_POST['reponse4'], $_POST['reponse5'], $_POST['idReponse']);
									echo '<div class="alert alert-success" role="alert">Question ajoutée au qcm</div>';
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

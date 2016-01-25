<?php

//Si les identifiants sont corrects, on redirige vers l'index
//Sinon, on redirige vers formConnexion.php
if (isset($_POST['login'])&& isset($_POST['motPasse']) && ($_POST['login'] == 'Achille') && ($_POST['motPasse'] == 'Talon')) {

	session_start();
	
	$_SESSION['identifie'] = 'OK';
	
	header('location:index.php');
	
}else{
	header('location:index.php');

}
?>
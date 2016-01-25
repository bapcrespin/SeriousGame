<?php

	global $conn;
	$res = $conn->prepare('Select * from Utilisateurs where mail = '.$_POST["login"].';');
	$res->execute();
	$util = $res->fetch();

	foreach($util as $uti) {

	    if ( isset($_POST['motPasse']) && ($uti["mdp"] == $_POST['motPasse'])){

	    	session_start();
	
			$_SESSION['identifie'] = 'OK';
			
			header('location:index.php');
	    }
	}

	header('location:index.php');
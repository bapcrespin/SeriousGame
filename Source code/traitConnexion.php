<?php
	include_once("./include/connect.inc.php");
	
	global $conn;
	$res = $conn->prepare("Select * from Utilisateurs where mail = :pMail");
	$res->execute(array('pMail' => $_POST['login']));
	$uti = $res->fetch();
	if ( isset($_POST['motPasse']) && ($uti["mdp"] == $_POST['motPasse'])){
		session_start();
		$_SESSION['identifie'] = 'OK';
		header('location:index.php');
	} else {
		header('location:index.php');
	}
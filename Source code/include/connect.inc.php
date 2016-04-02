<?php
try {
	// vous devez changer le nom de la base, le nom d'utilisateur et le mot de passe
	$conn = new PDO('mysql:host=localhost;dbname=seriousgame;charset=UTF8', 'root', '', array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION));
}
catch (PDOException $e) {
	echo "Erreur: ".$e->getMessage()."<br/>" ;
	die() ;
}
?>
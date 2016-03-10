<?php
try {
	// vous devez changer le nom de la base, le nom d'utilisateur et le mot de passe
	$conn = new PDO('mysql:host=mysql.hostinger.fr;dbname=u539093102_data;charset=UTF8', 'u539093102_user', 'esprod2016', array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION));
}
catch (PDOException $e) {
	echo "Erreur: ".$e->getMessage()."<br/>" ;
	die() ;
}
?>
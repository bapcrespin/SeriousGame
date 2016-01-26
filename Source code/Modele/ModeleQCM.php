<?php
include_once("QCM.php"); 
include_once("./include/connect.inc.php");

class ModeleQcm {
	
    public function getQcm($pIdQcm) {
		global $conn;
		$res = $conn->prepare("Select * from Qcm where idQcm = :pIdQcm");
		$res->execute(array('pIdQcm' => $pIdQcm));
		$qcm = $res->fetch();
		$unQcm = new QCM($qcm["idQcm"], $qcm["niveau"], $qcm["temps"], $qcm["valider"], $qcm["url"]);
        return $unQCM;
    }

    public function ajouterQcm($pNiveau, $pTemps, $pUrl, $pNom) {
    	global $conn;
    	$res = $conn->prepare("Insert into Qcm (niveau, temps, nom, url) values(:pNiveau, :pTemps, :pNom, :pUrl)");
    	$res->execute(array("pNiveau" => $pNiveau, "pTemps" => $pTemps, "pNom" => $pNom, "pUrl" => $pUrl));
    }

    public function getIdQcm($pNomQcm) {
        global $conn;
        $res = $conn->prepare("Select * from Qcm where nom = :pNomQcm");
        $res->execute(array("pNomQcm" => $pNomQcm));
        $id = $res->fetch();
        return $id["idQcm"];
    }

}
?>
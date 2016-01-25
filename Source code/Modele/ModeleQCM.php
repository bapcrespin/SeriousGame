<?php
include_once("QCM.php"); 
include_once("./include/connect.inc.php");

class ModeleCategorie {
	
    public function getQcm($pIdQcm) {
		global $conn;
		$res = $conn->prepare("Select * from QCM where idQcm = :pIdQcm");
		$res->execute(array('pIdQcm' => $pIdQcm));
		$qcm = $res->fetch();
		$unQcm = new QCM($qcm["idQcm"], $qcm["temps"], $qcm["bonus"], $qcm["valider"], $qcm["url"]);
        return $unQCM;
    }

    public function ajouterQcm($pIdQcm, $pTemps, $pUrl, $pBonus, $pNom) {
    	global $conn;
    	$res = $conn->prepare("Insert into Qcm values(:pIdQcm, :pTemps, :pBonus, 0, :pNom)");
    	$res->execute(array("pIdQcm" => $pIdQcm, "pTemps" => $pTemps, "pBonus" => $pBonus, "pNom" => $pNom));
    }

}
?>
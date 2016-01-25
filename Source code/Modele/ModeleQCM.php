<?php
include_once("QCM.php"); 
include_once("./include/connect.inc.php");

class ModeleQcm {
	
    public function getQcm($pIdQcm) {
		global $conn;
		$res = $conn->prepare("Select * from QCM where idQcm = :pIdQcm");
		$res->execute(array('pIdQcm' => $pIdQcm));
		$qcm = $res->fetch();
		$unQcm = new QCM($qcm["idQcm"], $qcm["niveau"], $qcm["temps"], $qcm["valider"], $qcm["url"]);
        return $unQCM;
    }

    public function ajouterQcm($pNiveau, $pTemps, $pUrl, $pBonus, $pNom) {
    	global $conn;
    	$res = $conn->prepare("Insert into Qcm values(:pIdQcm, :pNiveau, :pTemps, :pBonus, 0, :pNom)");
    	$res->execute(array("pIdQcm" => $pIdQcm, "pNiveau" => $pNiveau, "pTemps" => $pTemps, "pNom" => $pNom));
    }

}
?>
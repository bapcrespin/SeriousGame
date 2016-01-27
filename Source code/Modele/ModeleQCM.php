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

    public function getAllQcm() {
        global $conn;
        $res = $conn->prepare("Select * from qcm");
        $res->execute();
        $listeQcm = null;
        foreach ($res as $qcm) {
            $listeQcm[] = new QCM($qcm['nom'], $qcm['niveau'], $qcm['url'], $qcm['temps']);
        }
        return $listeQcm;
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

    public function getNomQcm($pIdQcm) {
        global $conn;
        $res = $conn->prepare("Select * from Qcm where idQcm = :pIdQcm");
        $res->execute(array("pIdQcm" => $pIdQcm));
        $nom = $res->fetch();
        return $nom["nom"];
    }

    public function getCodeVideoQcm($pIdQcm) {
        global $conn;
        $res = $conn->prepare("Select * from Qcm where idQcm = :pIdQcm");
        $res->execute(array("pIdQcm" => $pIdQcm));
        $url = $res->fetch();
        $codeVideo = $url["url"];
        $codeVideo = explode('=', $codeVideo)[1];
        return $codeVideo ;
    }

}
?>
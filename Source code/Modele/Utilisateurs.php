<?php
class Utilisateurs {
    private $idUser;
    private $mdp;
	private $avatar;
	private $scoreTotal;
	private $mail;
	
	private function __construct(){

    }


	public function __construct_1($idUser, $mdp, $mail) {
        $this->idUser = $idUser;
        $this->mdp = $mdp;
		$this->avatar = "avatar-".$idUser.".png";
		$this->mail = $mail;
		$this->scoreTotal = 0;
    }
	
	public function __construct_all($idUser, $mdp, $avatar, $scoreTotal, $mail) {
        $this->idUser = $idUser;
        $this->mdp = $mdp;
		$this->avatar = $avatar;
		$this->mail = $mail;
		$this->scoreTotal = $scoreTotal;
    }
}
?>
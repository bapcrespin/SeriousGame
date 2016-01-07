<?php
class Utilisateurs {
    public $idUser;
    public $mdp;
	public $avatar;
	public $scoreTotal;
	public $mail;

    public function __construct($idUser, $mdp) {
        $this->idUser = $idUser;
        $this->mdp = $mdp;
		$this->avatar = "avatar-".$idUser.".png";
		$this->scoreTotal = 0;
    }
	
	public function __construct($idUser, $mdp, $mail) {
        $this->idUser = $idUser;
        $this->mdp = $mdp;
		$this->avatar = "avatar-".$idUser.".png";
		$this->mail = $mail;
		$this->scoreTotal = 0;
    }
	
	
}
?>
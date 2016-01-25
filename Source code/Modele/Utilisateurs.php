<?php
class Utilisateurs {
    private $idUser;
    private $mdp;
	private $avatar;
	private $scoreTotal;
	private $mail;

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
	
	public function __construct($idUser, $mdp, $avatar, $scoreTotal, $mail) {
        $this->idUser = $idUser;
        $this->mdp = $mdp;
		$this->avatar = $avatar;
		$this->mail = $mail;
		$this->scoreTotal = $scoreTotal;
    }
}
?>
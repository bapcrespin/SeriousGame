<?php
class Utilisateurs {
	private $mail;
    private $mdp;
	private $avatar;
	private $scoreTotal;
	
	private function __construct(){

    }

	public function __construct_1($mail, $mdp) {
        $this->mail = $mail;
        $this->mdp = $mdp;
		$this->avatar = "avatar-".$mail.".png";
		$this->scoreTotal = 0;
    }
	
	public function __construct_all($mail, $mdp, $avatar, $scoreTotal) {
        $this->mail = $mail;
        $this->mdp = $mdp;
		$this->avatar = $avatar;
		$this->scoreTotal = $scoreTotal;
    }
}
?>
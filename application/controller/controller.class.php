<?php
class Controller {

    public $load;
    public $user;


function __construct() {
        $this->load = new load();
        $this->user = new user();
        $this->home();
    }


function home() {

		$this->user->userID = "gwantuch";
        $this->user->firstname = "Gordon";
        $this->user->lastname = "Wantuch";
        $this->user->email = 'gwantuch@iu.edu';
        $this->user->role = "student";



    $data = $this->user->getName();

		$this->load->view("view.php",$data);
	}


}
?>

<?php
/**
* 
*/
class Login_Model extends Model
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		
	}

	public function run(){
		$str = $this->db->prepare("select id from users where email = :email and password = MD5(:password)");
		$str->execute(array('email' =>$_POST['email'] , 'password' => $_POST['password']));
		//$data = $str->fetchAll();
		$count = $str->rowCount();
		if ($str->rowCount()){ 
			Session::init();
			Session::set('loggedIn',true);
			header('location: ../');
		} else {
			header('location: ../login');
		}

	}
}
<?php 

class Auth_admin
{
	use Controller;
	

	public function index()
	{
		$requestMethod = $_SERVER["REQUEST_METHOD"];

		switch ($requestMethod) {
			case "POST": {
					$admin = new Admin_model;
					$admin->verify();
					break;
				}
	
    }
	$this->view('auth/admin');
	}

	
}

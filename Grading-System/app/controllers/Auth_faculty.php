<?php 

class Auth_faculty
{
	use Controller;
	

	public function index()
	{
		$requestMethod = $_SERVER["REQUEST_METHOD"];

		switch ($requestMethod) {
			case "POST": {
					$faculty = new Faculty_model;
					$faculty->verify();
					break;
				}
	
    }
	$this->view('auth/faculty');
	}
	}

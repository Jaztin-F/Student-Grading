<?php 

class Auth_student
{
	use Controller;

	public function index()
	{
		$requestMethod = $_SERVER["REQUEST_METHOD"];

		switch ($requestMethod) {
			case "POST": {
					$student = new Student_model;
					$student->verify();
					break;
				}

	
    }
	$this->view('auth/student');
	}

}

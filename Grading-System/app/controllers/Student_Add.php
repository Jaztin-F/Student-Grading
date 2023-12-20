<?php 


class Student_Add
{
	use Controller;
	
	public function index()
	{
		$requestMethod = $_SERVER["REQUEST_METHOD"];

		switch ($requestMethod) {
			case "POST": {
					$student = new Student_model;
					$student->insert($_POST);
					echo "<script>alert('Successfully Added!')</script>";
					break;
				}
			}
		$this->view('admin/addstudent');
	}
}

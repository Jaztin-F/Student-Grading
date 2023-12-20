<?php 

class Student_Update
{
	use Controller;
	use model;
	
	public function index()
	{
		$requestMethod = $_SERVER["REQUEST_METHOD"];

		switch ($requestMethod) {
			case "POST": {
				$id = $_GET['id'];
					$student = new Student_model;
					$student->update($id, $_POST);
					echo "<script>alert('Successfully Updated!')</script>";
					$this->view('admin/student');	
					break;
				}
				
				default:{
					$this->view('admin/updatestudent');
				}
    }

}
	
}

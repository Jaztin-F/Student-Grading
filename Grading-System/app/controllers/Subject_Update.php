<?php 

class Subject_Update
{
	use Controller;
	use model;
	
	public function index()
	{
		$requestMethod = $_SERVER["REQUEST_METHOD"];

		switch ($requestMethod) {
			case "POST": {
				$id = $_GET['id'];
					$student = new Subject_model;
					$student->update($id, $_POST);
					echo "<script>alert('Successfully Updated!')</script>";
					$this->view('admin/subject');	
					break;
				}
				
				default:{
					$this->view('admin/updatesubject');
				}
    }

}
	
}

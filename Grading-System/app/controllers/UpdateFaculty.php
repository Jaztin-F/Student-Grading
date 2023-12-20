<?php 

class UpdateFaculty
{
	use Controller;
	use model;
	
	public function index()
	{
		$requestMethod = $_SERVER["REQUEST_METHOD"];

		switch ($requestMethod) {
			case "POST": {
					$id = $_GET['id'];
					$faculty = new Faculty_model;
					$faculty->update($id, $_POST);
					echo "<script>alert('Successfully Updated!')</script>";
					$this->view('admin/faculty');
					break;
				}
				
				default:{
					$this->view('admin/updatefaculty');
				}
					
				
	
    }
		
	
}

	
		
}

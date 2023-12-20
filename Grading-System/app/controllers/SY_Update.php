<?php 

class SY_Update
{
	use Controller;
	use model;
	
	public function index()
	{
		$requestMethod = $_SERVER["REQUEST_METHOD"];

		switch ($requestMethod) {
			case "POST": {
				$id = $_GET['id'];
					$sy = new SY_model;
					$sy->update($id, $_POST);
					echo "<script>alert('Successfully Updated!')</script>";
					$this->view('admin/sy');	
					break;
				}
				
				default:{
					$this->view('admin/updatesy');
				}
    }

}
	
}

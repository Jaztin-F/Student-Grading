<?php 


class AddFaculty
{
	use Controller;
	
	public function index()
	{
		$requestMethod = $_SERVER["REQUEST_METHOD"];

		switch ($requestMethod) {
			case "POST": {
					$Faculty = new Faculty_model;
					$Faculty->insert($_POST);
					echo "<script>alert('Successfully Added!')</script>";
					break;
				}
			}
		$this->view('admin/addfaculty');
	}
}

<?php 


class A_settings
{
	use Controller;
	
	public function index()
	{
		$requestMethod = $_SERVER["REQUEST_METHOD"];

		switch ($requestMethod) {
			case "POST": {
					$change = new Admin_model;
					$change->update("1", $_POST);
					echo "<script>alert('Successfully Updated!')</script>";
					break;
				}
			}
			$this->view('admin/settings');
	}
		
	}


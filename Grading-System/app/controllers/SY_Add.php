<?php 

class SY_Add
{
	use Controller;

	
        public function index()
        {
            $requestMethod = $_SERVER["REQUEST_METHOD"];
    
            switch ($requestMethod) {
                case "POST": {
                    $sy = new SY_model;
                    $sy->insert($_POST);
                        echo "<script>alert('Successfully Added!')</script>";
                        break;
                    }
                }
            $this->view('admin/addsy');
        }
	}



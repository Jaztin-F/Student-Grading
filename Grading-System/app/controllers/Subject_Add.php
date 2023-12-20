<?php 

class Subject_Add
{
	use Controller;

	
        public function index()
        {
            $requestMethod = $_SERVER["REQUEST_METHOD"];
    
            switch ($requestMethod) {
                case "POST": {
                        $student = new Subject_model;
                        $student->insert($_POST);
                        echo "<script>alert('Successfully Added!')</script>";
                        break;
                    }
                }
            $this->view('admin/addsubject');
        }
	}



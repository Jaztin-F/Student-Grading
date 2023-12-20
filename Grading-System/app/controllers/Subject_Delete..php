<?php

class Subject_Delete
{
    use Controller;
    
    public function index(){      
    
        $id = $_GET['id'];
        $student = new Subject_model;
		$student->delete($id);
        echo "<script>alert('Deleted Successfully!')</script>";
        $this->view('admin/subject');

}
    }


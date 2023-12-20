<?php

class Student_Delete
{
    use Controller;
    
    public function index(){      
    
        $id = $_GET['id'];
        $student = new Student_model;
		$student->delete($id);
        echo "<script>alert('Deleted Successfully!')</script>";
        $this->view('admin/student');

}
    }


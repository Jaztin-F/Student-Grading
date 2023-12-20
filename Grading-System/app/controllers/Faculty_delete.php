<?php

class Faculty_delete 
{
    use Controller;
    
    public function index(){      
    
        $id = $_GET['id'];
        $faculty = new Faculty_model;
		$faculty->delete($id);
        echo "<script>alert('Deleted Successfully!')</script>";
        $this->view('admin/faculty');

}
    }

  
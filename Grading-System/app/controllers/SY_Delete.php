<?php

class SY_Delete
{
    use Controller;
    
    public function index(){      
    
        $id = $_GET['id'];
        $sy = new SY_model;
		$sy->delete($id);
        echo "<script>alert('Deleted Successfully!')</script>";
        $this->view('admin/sy');

}
    }


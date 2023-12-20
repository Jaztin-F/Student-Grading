    <?php

class SY_Activate
{
    use Controller;
    
    public function index(){      
    
        $id = $_GET['id'];
		$sy = new SY_model;
        $sy->activate($id);
        
        $this->view('admin/sy');

}
    }


<?php 
class Admin_model
{
	use Model;

	protected $table = 'admin';

	protected $allowedColumns = [
		'username',
		'password',
	];

    public function verify(){
        $admin = new Admin_model;
        $arr['username'] = $_POST['username'];
        $row = $admin->first($arr);

        if($row){
            if($row-> password === $_POST['password'])
           {
            $_SESSION['Admin'] = $row;
            redirect('Admin_dash');
        }else{
        echo "<script>alert('Incorrect Password!')</script>";
            }    
        }else{
        echo "<script>alert('No User data Found!')</script>";
        
        }  
           
    } 
    
}

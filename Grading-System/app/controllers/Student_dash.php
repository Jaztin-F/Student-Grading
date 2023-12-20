<?php

class Student_dash 
{
    use Controller;
    
    public function index(){      
        
        $this -> view('student/dashboard');
    }
}
    


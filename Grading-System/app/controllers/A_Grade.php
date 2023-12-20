<?php 


class A_Grade
{
	use Controller;
	
	public function index()
	{
		$this->view('admin/grade');
	}
}

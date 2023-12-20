<?php 
class Faculty_model
{
	use Model;

	protected $table = 'faculty';

	protected $allowedColumns = [
        'faculty_id',
        'first_name',
		'middle_name',
        'last_name',
		'date_of_birth',
        'gender',
		'institute',
        'course',
        'contact_number',
        'password',
	];

    public function verify(){
        $faculty = new Faculty_model;
        $arr['faculty_id'] = $_POST['faculty_id'];
        $row = $faculty->first($arr);

        if($row){
            if($row-> password === $_POST['password'])
           {
            $_SESSION['name'] =  $row->first_name . '  ' . $row->last_name;
            redirect('Faculty_dash');
        }else{
            echo "<script>alert('Incorrect Password!')</script>";
            }    
    }else{
        echo "<script>alert('No User data Found!')</script>";
        }  
    }

    public function facultytable(){
        $query = "SELECT * FROM {$this->table} ORDER BY first_name";
        $result = $this->query($query);

        if (!$result) {
            return '<p>No records found</p>';
        }

        $html = '<table border="1">';
        $html .= '<thead><tr>
        <th>Faculty ID</th>
        <th>Firstname</th>
        <th>Middlename</th>
		<th>Lastname</th>
        <th>Date Of Birth</th>
        <th>Gender</th>
		<th>Institute</th>
        <th>Course</th>
        <th>Contact</th>
        <th>Actions</th></tr>
        </thead>';
        foreach ($result as $row) {
            $html .= '<tbody>';
            $html .= '<tr>';
            $html .= '<td>' . $row->faculty_id . '</td>';
            $html .= '<td>' . $row->first_name . '</td>';
            $html .= '<td>' . $row->middle_name . '</td>';
			$html .= '<td>' . $row->last_name . '</td>';
			$html .= '<td>' . $row->date_of_birth . '</td>';
			$html .= '<td>' . $row->gender . '</td>';
			$html .= '<td>' . $row->institute . '</td>';
			$html .= '<td>' . $row->course . '</td>';
			$html .= '<td>' . $row->contact_number . '</td>';
			$html .= '<td>' . "<a class='update' href='UpdateFaculty ?id=" . $row->id . "'>Update </a>" 
			."<a class='delete' href='Faculty_delete ?id=" . $row->id. "'>Delete</a>" . '</td>';
            $html .= '</tr>';	
            $html .= '</tbody>';
        }

        $html .= '</table>';
        return $html;


    }

    

}
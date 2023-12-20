<?php 
class Student_model
{
	use Model;

	protected $table = 'students';

	protected $allowedColumns = [
        'student_id',
        'last_name',
		'first_name',
		'middle_name',
		'date_of_birth',
		'gender',
        'home_address',
        'province',
        'municipality',
        'barangay',
        'purok',
        'zip_code',
        'contact_number',
        'institute',	
        'course',
        'emergency_contact_name',
        'emergency_contact_number',
        'emergency_contact_address',
        'password',
	];

    public function verify(){
        $student = new Student_model;
        $arr['student_id'] = $_POST['student_id'];
        $row = $student->first($arr);
        if($row){
            if($row-> password === $_POST['password'])
           {
            $_SESSION['name'] =  $row->first_name . '  ' . $row->last_name;
            $_SESSION['fullname'] =  $row->first_name . '  ' . $row->middle_name. '  ' . $row->last_name;
            $_SESSION['course'] =  $row->course;
            $_SESSION['institute'] =  $row->institute;
            $_SESSION['studentid'] =  $row->student_id;
            $_SESSION['contact_number'] =  $row->contact_number;
            $_SESSION['birth'] =  $row->date_of_birth;
            $_SESSION['gender'] =  $row->gender;
            $_SESSION['address'] =  $row->purok . '  ' . $row->barangay
            .'  '.$row->home_address . '  ' . $row->municipality
            .'  '.$row->province . '  ' . $row->zip_code;

            $_SESSION['emergency'] =  $row->emergency_contact_name . '  ' . $row->emergency_contact_number
            .'  '.$row->emergency_contact_address;
            
          
            redirect('Student_dash');
        }else{
            echo "<script>alert('Incorrect Password!')</script>";
            }    
    }else{
        echo "<script>alert('No User data Found!')</script>";
        }  
    }

    public function semester(){
        $query = "SELECT * FROM schoolyear WHERE isActive = 'Active'";
        $result = $this->query($query);

        if (!$result) {
            return '<p>No records found</p>';
        }

        foreach ($result as $row) {
            $html = $row->school_year .' ' .$row->semester;
        }
        return $html;
    }

    public function studenttable(){
        $query = "SELECT * FROM {$this->table} ORDER BY first_name";
        $result = $this->query($query);

        if (!$result) {
            return '<p>No records found</p>';
        }

        $html = '<table border="1">';
        $html .= '<thead>
        <tr><th>Student ID</th>
        <th>Firstname</th>
        <th>Middlename</th>
		<th>Lastname</th>
        <th>Date Of Birth</th>
        <th>Gender</th>
        <th>Address</th>
		<th>Institute</th>
        <th>Course</th>
        <th>Contact</th>
        <th>Emergency Contact</th>
        <th>Emergency Contact number</th>
        <th>Emergency Contact adress</th>
        <th>Actions</th></tr>
        </thead>';
        foreach ($result as $row) {
            $html .= '<tbody>';
            $html .= '<tr>';
            $html .= '<td>' . $row->student_id . '</td>';
            $html .= '<td>' . $row->first_name . '</td>';
            $html .= '<td>' . $row->middle_name . '</td>';
			$html .= '<td>' . $row->last_name . '</td>';
			$html .= '<td>' . $row->date_of_birth . '</td>';
			$html .= '<td>' . $row->gender . '</td>';
            $html .= '<td id="scrollCell"> <div class="scroll-content">' . $row->purok . ', ' . $row->home_address . ', ' . $row->barangay . ',
 ' . $row->municipality . ', ' . $row->province . ' 
 ' . $row->zip_code . '</div></td>';
			$html .= '<td>' . $row->institute . '</td>';
			$html .= '<td>' . $row->course . '</td>';
			$html .= '<td>' . $row->contact_number . '</td>';
            $html .= '<td>' . $row->emergency_contact_name . '</td>';
            $html .= '<td>' . $row->emergency_contact_number . '</td>';
            $html .= '<td>' . $row->emergency_contact_address . '</td>';
			$html .= '<td>' . "<a class='update' href='Student_Update ?id=" . $row->id . "'>Update </a>" 
			."<a class='delete' href='Student_Delete ?id=" . $row->id. "'>Delete</a>" . '</td>';
            $html .= '</tr>';	
            $html .= '</tbody>';
        }

        $html .= '</table>';
        return $html;

    }

    

}
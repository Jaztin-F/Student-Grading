
<?php 
class SY_model
{
	use Model;

	protected $table = 'schoolyear';

	protected $allowedColumns = [
        'school_year',
		'semester',
		'isActive',
		
	];

    public function sytable(){
        $query = "SELECT * FROM {$this->table} ORDER BY school_year";
        $result = $this->query($query);

        if (!$result) {
            return '<p>No records found</p>';
        }

        $html = '<table border="1">';
        $html .= '<thead>
        <tr><th>School Year</th>
        <th>Semester</th>
        <th>State</th>
        <th>Action</th>
        </tr>
        </thead>';
        foreach ($result as $row) {
            $html .= '<tbody>';
            $html .= '<tr>';
            $html .= '<td>' . $row->school_year . '</td>';
            $html .= '<td>' . $row->semester . '</td>';
            $html .= '<td>' . $row->isActive . '</td>';
			$html .= '<td>' 
            ."<a class='activate' href='SY_Activate ?id=" . $row->id. "'>Activate  </a>"
            . "<a class='update' href='SY_Update ?id=" . $row->id . "'>Update  </a>" 
			."<a class='delete' href='SY_Delete ?id=" . $row->id. "'>Delete</a>" . '</td>';
            $html .= '</tr>';	
            $html .= '</tbody>';
        }

        $html .= '</table>';
        return $html;

    }

    public function activate($activate){
        $deactivate = "UPDATE {$this->table} SET isActive = 'Inactive' WHERE isActive = 'Active'";
            $result = $this->query($deactivate); 
        

        if (!$result) {
           
        $setactive = "UPDATE {$this->table} SET isActive = 'Active' WHERE id = $activate";
        $result = $this->query($setactive); 

            if ($setactive) {
                echo "<script>alert('Successfully Activated!')</script>";

        }

        else{
            echo "<script>alert('Failed!')</script>";
        }

    }

  
    }

}


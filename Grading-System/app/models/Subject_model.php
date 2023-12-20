<?php 
class Subject_model
{
	use Model;

	protected $table = 'subjects';

	protected $allowedColumns = [
        'code',
		'description',
		'unit',
		'type',
		
	];

    public function subjecttable(){
        $query = "SELECT * FROM {$this->table} ORDER BY code";
        $result = $this->query($query);

        if (!$result) {
            return '<p>No records found</p>';
        }

        $html = '<table border="1">';
        $html .= '<thead>
        <tr><th>Code</th>
        <th>Description</th>
        <th>Unit</th>
		<th>Type</th>
        <th>Action</th>
        </tr>
        </thead>';
        foreach ($result as $row) {
            $html .= '<tbody>';
            $html .= '<tr>';
            $html .= '<td>' . $row->code . '</td>';
            $html .= '<td>' . $row->description . '</td>';
            $html .= '<td>' . $row->unit . '</td>';
			$html .= '<td>' . $row->type . '</td>';
			$html .= '<td>' . "<a class='update' href='Subject_Update ?id=" . $row->id . "'>Update </a>" 
			."<a class='delete' href='Subject_Delete ?id=" . $row->id. "'>Delete</a>" . '</td>';
            $html .= '</tr>';	
            $html .= '</tbody>';
        }

        $html .= '</table>';
        return $html;

    }
}

    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Faculty</title>
    <link rel="stylesheet" href="<?= ROOT?>/assets/css/admin/faculty.css">
</head>
<body>
<section class = "navbar">
    <div class = "logo">
        <img src="<?= ROOT?>/assets/images/gslogo.png" alt="Grading System">
    </div>

    <h3>Grading System</h3>
    <div class = "menu">
        <a class="item" href="Admin_dash">Dashboard</a>
        <div class = "dropdown">
            <a class="item" href="SY">School Year</a>
        <div class="dropdown-content">
        <a class="item" href="SY_Add">Add New School Year</a>
        <a class="item" href="SY">School Year List</a>
      </div> </div>
        <div class = "dropdown">
            <a class="item" href="Student">Student</a>
        <div class="dropdown-content">
        <a class="item" href="Student_Add">Add New Student</a>
        <a class="item" href="Student">Student List</a>
      </div>
        </div>
        <div class = "dropdown">
            <a class="item" href="A_Grade">Grade</a>
        <div class="dropdown-content">
        <a class="item" href="Assign_Subject">Assign Subject</a>
        <a class="item" href="Assign_Student">Assign Students</a>
      </div>    
        </div>    
        
        <div class = "dropdown">
            <a class="active" href="Faculty">Faculty</a>
        <div class="dropdown-content">
        <a class="item" href="AddFaculty">Add New Faculty</a>
        <a class="item" href="Faculty">Faculty List</a>
      </div>    
        </div>
        <a class="item" href="Institute">Institute</a>

        <div class = "dropdown">
            <a class="item" href="Subject">Subject</a>
        <div class="dropdown-content">
        <a class="item" href="Subject_Add">Add New Subject</a>
        <a class="item" href="Subject">Subject List</a>
      </div></div>     
        
        <div class = "dropdown-admin">
            <a class="admin" href="">Administrator</a>
        <div class="dropdown-content-admin">
            <a class="item" href="A_settings">Settings</a>
            <a class="logout" href="Logout">Logout</a>  
      </div>
    </div>   
    </div>

</section>
  
<div class="header"><h2>Update Faculty</h2></div>

    <section class="content">
    <div class="addfaculty">
<div class = "container">
<?php 
 $user_id = $_GET['id'];
 $string = "mysql:hostname=".DBHOST.";dbname=".DBNAME;
 $con = new PDO($string,DBUSER,DBPASS);


 $sql = "SELECT * FROM faculty WHERE id = :user_id";
 $stmt = $con->prepare($sql);
 $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
 $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }
?>

<form method="post">
<div class="inputBox"> <input type="text" name="faculty_id" value="<?php echo $row['faculty_id']; ?>"  required><i>Faculty_ID</i></div>
    <div class="facultyname">
            <div class="inputBox"> <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>" required><i>First Name</i></div>
            <div class="inputBox"> <input type="text" name="middle_name" value="<?php echo $row['middle_name']; ?>" required><i>Middle Name</i></div>
            <div class="inputBox"> <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>" required><i>Last Name</i></div>
            </div>

       <div class="facultyinfo">
       <div class="inputBox"> <input type="date" name="date_of_birth" value="<?php echo $row['date_of_birth']; ?>" required></div>
       <div class="inputBox"> <input type="text" name="contact_number" value="<?php echo $row['contact_number']; ?>" required><i>Contact</i></div>
        </div>  


        <div class="selection">
  
        <select name="institute" required>
                <option selected ="true"disabled ="disabled"><?php echo $row['institute']; ?></option>
                <option value="FCDSET">FCDSET</option>
                <option value="FNAHS">FNAHS</option>
                <option value="FTED">FTED</option>
                <option value="FALS">FALS</option>
                <option value="FGBM">FGBM</option>
            </select>

            
            <select name="course" required>
                <option selected = "true" disabled = "disabled"><?php echo $row['course']; ?></option>
                <option value ="BSIT">BSIT</option>
                <option value ="BSCE">BSCE</option>
                <option value ="BSCRIM">BSCRIM</option>
                <option value ="BSBA">BSBA</option> 
                <option value ="BSA">BSA</option> 
                <option value ="BSN">BSN</option> 
                <option value ="BSHRM">BSHRM</option> 
                <option value ="BITM">BITM</option>  
                <option value ="BSBIO">BSBIO</option>
                <option value ="BEE">BEE</option>
            </select>

           
            <select name="gender"  required>
                <option selected ="true" disabled ="disabled"><?php echo $row['gender']; ?></option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Prefer not to Say</option>
            </select>
            </div>

        <div class="inputBox"><input type="submit" value="update Faculty"></div></form></div>
        </form>
    </div></div>
    </section>
</body>
</html>
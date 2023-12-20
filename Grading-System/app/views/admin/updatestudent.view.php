<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
    <link rel="stylesheet" href="<?= ROOT?>/assets/css/admin/student.css">
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
            <a class="active" href="Student">Student</a>
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
            <a class="item" href="Faculty">Faculty</a>
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
    <?php
     $user_id = $_GET['id'];
     $string = "mysql:hostname=".DBHOST.";dbname=".DBNAME;
     $con = new PDO($string,DBUSER,DBPASS);
 

     $sql = "SELECT * FROM students WHERE id = :user_id";
     $stmt = $con->prepare($sql);
     $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
     $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
        }
    ?>
    <section class="content">
    <div class="addstudent">
<div class = "container">
<form method="post">
<div class="inputBox"> <input type="text" name="student_id" value="<?php echo $row['student_id']; ?>" required><i>Student_ID</i></div>
<div class="studentname">
            <div class="inputBox"> <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>" required><i>First Name</i></div>
            <div class="inputBox"> <input type="text" name="middle_name" value="<?php echo $row['middle_name']; ?>" required><i>Middle Name</i></div>
            <div class="inputBox"> <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>" required><i>Last Name</i></div>
            </div>

       <div class="studentinfo">
       <div class="inputBox"> <input type="date" name="date_of_birth" value="<?php echo $row['date_of_birth']; ?>" required></div>
       <div class="inputBox"> <input type="text" name="contact_number" value="<?php echo $row['contact_number']; ?>" required><i>Contact</i></div>
        </div>  

        <div class="address1">
       <div class="inputBox"> <input type="text" name="purok" value="<?php echo $row['purok']; ?>"  required><i>purok</i></div>
       <div class="inputBox"> <input type="text" name="home_address"value="<?php echo $row['home_address']; ?>"  required><i>home_address</i></div>
       <div class="inputBox"> <input type="text" name="barangay" value="<?php echo $row['barangay']; ?>" required><i>barangay</i></div>
        </div>  
       
       <div class="address2">
       <div class="inputBox"> <input type="text" name="municipality" value="<?php echo $row['municipality']; ?>" required><i>municipality</i></div>
       <div class="inputBox"> <input type="text" name="province" value="<?php echo $row['province']; ?>" required><i>province</i></div>
       <div class="inputBox"> <input type="text" name="zip_code" value="<?php echo $row['zip_code']; ?>" required><i>zip_code</i></div>
        </div>  

        <div class="selection">
        
        <select name="institute"required>
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

           
            <select name="gender"required>
                <option selected ="true"disabled ="disabled"><?php echo $row['gender']; ?></option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Prefer not to Say</option>
            </select>
            </div>

            <div class="guardian">
            <div class="inputBox"> <input type="text" name="emergency_contact_name" value="<?php echo $row['emergency_contact_name']; ?>"  required><i>Guardian Name</i></div>
            <div class="inputBox"> <input type="text" name="emergency_contact_number" value="<?php echo $row['emergency_contact_number']; ?>"  required><i>Guardian Contact</i></div>
            </div>

            <div class="inputBox"> <input class= "guardianaddress"type="text"  name="emergency_contact_address" value="<?php echo $row['emergency_contact_address']; ?>"required><i>Guardian Address</i></div>

        <div class="inputBox"><input type="submit" value="Update Student"></div></form></div>
        </form>
    </div></div>
    </section>
</body>
</html>
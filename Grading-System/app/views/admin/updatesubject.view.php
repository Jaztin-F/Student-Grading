<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Subject</title>
    <link rel="stylesheet" href="<?= ROOT?>/assets/css/admin/subject.css">
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
            <a class="item" href="Faculty">Faculty</a>
        <div class="dropdown-content">
        <a class="item" href="AddFaculty">Add New Faculty</a>
        <a class="item" href="Faculty">Faculty List</a>
      </div>    
        </div>
        <a class="item" href="Institute">Institute</a>

        <div class = "dropdown">
            <a class="active" href="Subject">Subject</a>
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
 

     $sql = "SELECT * FROM subjects WHERE id = :user_id";
     $stmt = $con->prepare($sql);
     $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
     $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
        }
    ?>
<div class="header"><h2>Update Subject</h2></div>

    <section class="content">
    <div class="subject">
<div class = "container">
<form method="post">

    <div class="info">
            <div class="inputBox"> <input type="text" name="code" value="<?php echo $row['code']; ?>" required><i>Code</i></div>
           
            <div class="inputBox"> <input type="text" name="unit" value="<?php echo $row['unit']; ?>" required><i>Unit</i></div>
 
            <select name="type" required>
                <option selected ="true"disabled ="disabled"><?php echo $row['type']; ?></option>
                <option value="Lecture">Lecture</option>
                <option value="Laboratory">Laboratory</option>
            </select> 
            </div>
            <div class="inputBox"> <input type="text" name="description"  value="<?php echo $row['description']; ?>" required><i>Description</i></div>

        <div class="inputBox"><input type="submit" value="Update Subject"></div></form></div>
        
        </form>
        </div>
    </div></div>
    </section>
</body>
</html>
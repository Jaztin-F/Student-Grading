<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Year</title>
    <link rel="stylesheet" href="<?= ROOT?>/assets/css/admin/sy.css">
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
            <a class="active" href="SY">School Year</a>
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
  
<div class="header"><h2>School Year</h2></div>

    <section class="tblcontent">
    <div class="table">
                <?php 

                $find = new SY_model;
                $result = $find->sytable();
                show($result);
                ?>
            </div>

         
        
    </section>
</body>
</html>
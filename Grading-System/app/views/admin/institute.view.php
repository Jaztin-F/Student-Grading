<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Institute</title>
    <link rel="stylesheet" href="<?= ROOT?>/assets/css/admin/institute.css">
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
      </div> 
      </div>
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
        <a class="active" href="Institute">Institute</a>

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

    <section class="content">
    <div class = institute>
           
           <div class = "card"><h2 id="FALS">FALS</h2>
           <h3>Courses Available</h3>
           <h3>BSBIO</h3>
           <h3>BSA</h3></div>

           <div class = "card"><h2 id="FCDSET">FCDSET</h2>
           <h3>Courses Available</h3>
           <h3>BSIT</h3>
           <h3>BITM</h3>
           <h3>BSCE</h3>
           <h3>BSMATH</h3></div>

           <div class = "card"><h2 id="FGBM">FGBM</h2>
           <h3>Courses Available</h3>
           <h3>BSCRIM</h3>
           <h3>BSBA</h3>
           <h3>BSHRM</h3> </div>

       </div>

       <div class = institute>

        <div class = "card"><h2 id="FTED">FTED</h2>
           <h3>Course Available</h3>
           <h3>BEE</h3> </div>

           <div class = "card"><h2 id="FNAHS">FNAHS</h2>
           <h3>Course Available</h3>
           <h3>BSN</h3></div>
        </div>
         
    </section>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Dashboard</title>
    <link rel="stylesheet" href="<?= ROOT?>/assets/css/faculty/dashboard.css">
    
</head>
<body>


<section class = "navbar">
    <div class = "logo">
        <img src="<?= ROOT?>/assets/images/gslogo.png" alt="Grading System">
    </div>
    <h3>Grading System</h3>
    <div class = "menu">
        <a class="active" href="Faculty_Dash">Dashboard</a>
        <a class="item" href="Student">Students</a>
        <a class="item" href="F_Grade">Grade</a>   
        <a class="item" href="Student">Reports</a>

        <div class = "dropdown-admin">
            <a class="admin">
                <?php 
        if (isset($_SESSION['name'])) {
            $user_id = $_SESSION['name'];
           echo  $user_id;         
            } ?></a>
        <div class="dropdown-content-admin">
            <a class="logout" href="Logout">Logout</a>  
      </div>
    </div>   
    </div>

</section>  
  
<div class="header"><h2>Summary Report</h2></div>

    <section class="content">
       
         
        
    </section>
  
</body>
</html>
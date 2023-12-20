<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <link rel="stylesheet" href="<?= ROOT?>/assets/css/student/dashboard.css">
    
</head>
<body>


<section class = "navbar">
    <div class = "logo">
        <img src="<?= ROOT?>/assets/images/gslogo.png" alt="Grading System">
    </div>
    <h3>Grading System</h3>
    <div class = "menu">
        <a class="active" href="Student_Dash">Dashboard</a>
        <a class="item" href="S_Grade">Grade</a>   
        
        <div class = "dropdown-admin">
            <a class="admin" href="">
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
  
<div class="header"><h2>Student Profile</h2></div>

    <section class="content">

    <div class="card">

     <a>   
        <?php   
        if (isset($_SESSION['studentid'])) {
            $fullname = $_SESSION['studentid'];
           echo  $fullname;         
            } ?></a>

       
        <a> <?php 
        if (isset($_SESSION['fullname'])) {
            $fullname = $_SESSION['fullname'];
           echo  $fullname;         
            } ?></a>
            
        <a>   
        <?php 
        if (isset($_SESSION['course'])) {
            $fullname = $_SESSION['course'];
           echo  $fullname;         
            } ?></a>
            
        <a>   
        <?php 
        if (isset($_SESSION['institute'])) {
            $fullname = $_SESSION['institute'];
           echo  $fullname;         
            } ?></a>

    <a>  
        <?php 
        if (isset($_SESSION['contact_number'])) {
            $fullname = $_SESSION['contact_number'];
           echo  $fullname;         
            } ?></a>

<a>  
        <?php 
        if (isset($_SESSION['birth'])) {
            $fullname = $_SESSION['birth'];
           echo  $fullname;         
            } ?></a>

<a>  
        <?php 
        if (isset($_SESSION['gender'])) {
            $fullname = $_SESSION['gender'];
           echo  $fullname;         
            } ?></a>

<a>  
        <?php 
        if (isset($_SESSION['address'])) {
            $fullname = $_SESSION['address'];
           echo  $fullname;         
            } ?></a>
        </div>
    
    
         
        
    </section>
  
</body>
</html>
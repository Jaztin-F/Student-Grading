<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?= ROOT?>/assets/css/home.css">
</head>
<body>
    <section class = "navbar">
    <div class = "logo"><img src="<?= ROOT?>/assets/images/gslogo.png" alt="Grading System"></div>
    <h3>Grading System</h3>
    <div class = "menu">
        <a class = "active" href="Home">Home</a>  
        <div class = "dropdown">
            <a  href="Auth_admin">Sign In</a>
        <div class="dropdown-content">
        <a href="Auth_admin">Admin</a>
        <a href="Auth_faculty">Faculty</a>
        <a href="Auth_student">Student</a>
      </div>
        </div>        
        <a href="About">About</a>
    </div>
    </section>  

    <section class="content">
    <div class="slogan">
            <p>Navigating Success through Assessment and Improvement</p>
            <a href="Auth_admin">Get Started</a>
        </div>
        <div class="image">
        <img src="<?= ROOT?>/assets/images/Homebot.png">  
        </div>
    </section>
       
   
</body> 
</html>
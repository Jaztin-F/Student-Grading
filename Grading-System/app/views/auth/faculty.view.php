<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading System</title>
    <link rel="stylesheet" href="<?= ROOT?>/assets/css/auth/admin.css">
</head>
<body>
    <section class = "navbar">
    <div class = "logo">
        <img src="<?= ROOT?>/assets/images/gslogo.png" alt="Grading System">
    </div>
    <h3>Grading System</h3>
    <div class = "menu">
        <a  href="Home">Home</a>  
        <div class = "dropdown">
            <a class = "active" href="Auth_admin">Sign In</a>
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
    <div class="image"><img src="<?= ROOT?>/assets/images/facultybot.png"></div>
    <div class = "container">
   
    <div class="form">
    <h2>Login as Faculty</h2>

    <form method="post">
        <div class="inputBox"><input type="text" name = "faculty_id" placeholder="Faculty ID" required></div>
        <div class="inputBox"><input type="password" name = "password" placeholder="Password" required></div>   
        <div class="btn"><input type="submit" value="Login"></div>
    </form>
        </div></div>
      
    </section>
</body>
</html>
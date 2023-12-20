<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading System</title>
    <link rel="stylesheet" href="<?= ROOT?>/assets/css/about.css">
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
            <a href="Auth_admin">Sign In</a>
        <div class="dropdown-content">
        <a href="Auth_admin">Admin</a>
        <a href="Auth_faculty">Faculty</a>
        <a href="Auth_student">Student</a>
      </div>
        </div>        
        <a class = "active" href="About">About</a>
    </div>
    </section>  

    <section class= "content">
        
        <div class = "about">
            <div class="image"><img src="<?= ROOT?>/assets/images/aboutbot.png"></div>
            <div class="message">
            <h1>About Us</h1>
            <p>This system is an online platform designed to facilitate 
                the process of evaluating and managing academic performance.
            This system aims to streamline the grading process, 
            enhance communication between educators and students, 
            and provide valuable insights into academic performance.</p>
            </div>
            
        </div>
        <h1>Management Team</h1>
        <br>
        <div class= "developers">

            <div class="card" name = "bon">
                <div class = "pic"><img src="<?= ROOT?>/assets/images/Bon.jpg"></div>
                <div class ="name">Bonjovie Belbelone</div>
                <div class ="description">System Tester</div>
            </div>

            <div class="card" name ="justine">
                <div class = "pic"><img src="<?= ROOT?>/assets/images/Justine.jpg"></div>
                <div class ="name">Justine Francisco</div>
                <div class ="description">Lead Developer</div>
            </div>

            <div class="card" name = "burn">
                <div class = "pic"><img src="<?= ROOT?>/assets/images/Burn.jpg"></div>
                <div class ="name">John Paul Burnea</div>
                <div class ="description">Technical Support</div>
            </div>
        </div>

        <br><br>

        
    </section>
</body> 
</html>
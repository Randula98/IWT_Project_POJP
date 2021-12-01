<!DOCTYPE html>
<html lang="en">

<?php
      include'config.php';
      session_start();
    ?>


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payrow</title>
  <link rel="thumbnail" type="ico" href="images/thumbnail.ico">
  <link rel="stylesheet" href="styles/styles_main.css">
  <link rel="stylesheet" href="styles/searchbar.css">
  <link rel="stylesheet" href="styles/login.css">
  <link rel="stylesheet" href="styles/cmplogin.css">
  <link rel="stylesheet" href="styles/footer.css">

  <link rel="stylesheet" href="styles/abishek_styles/login.css">
  <link rel="stylesheet" href="styles/abishek_styles/contactus.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">

  <!--<link rel="stylesheet" href="styles/header.css">-->
  <script src="js/myScript.js"></script>
</head>
<!--\
<div class="container">
  <div class="spinner">
    <div class="circle1"></div>
    <div class="circle2"></div>
  </div>
</div>
-->
<body>

<header>
      <div id="header">
        <div id="navLogo">
          <img id="nbl" src="images/logod.png" alt="logo">
        </div>

        <div id="searchbar1">
          <form action="searchbar.php" method="POST">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit">Search</button>
          </form>
        </div>

        <div id="navbar1">
          <ul id="navbarlinks">
            <li><a href="index.php"><p>Home</p></a></li>
            <li><a href="contactus.php"><p>Contact Us</p></a></li>
            <li><a href="aboutus.php"><p>About Us</p></a></li>
            <!---->
            <?php
              if(isset($_SESSION['id']))
              {
                if($_SESSION['role'] === 'admin')
                {
                  echo '<li><a href="admindashboard.php"><p>Dashboard</p></a></li></ul>';
                }
                else if($_SESSION['role'] === 'js')
                {
                  echo '<li><a href="jsdashprofile.php"><p>Dashboard</p></a></li></ul>';
                }
                else if($_SESSION['role'] ==='emp')
                {
                  echo '<li><a href="empdashprofile.php"><p>Dashboard</p></a></li></ul>';
                }
                echo '<a id="loginbttn" href="destroy.php"><p>Logout</p></a>';
              }
              else{
                echo '<li><a href="sign.php"><p>Sign Up</p></a></li></ul><a id="loginbttn" href="login.php"><p>Login</p></a>';
              }


            ?>

          <!---->
        </div>
      </div>

      <div id="navbar2">
        <a href="trendingjobs.php">Trending Jobs</a>
        <a href="parttimejobs.php">Part Time</a>
        <a href="fulltimejobs.php">Full Time</a>
        <a href="localjobs.php">Local Jobs</a>
        <a href="foreignjobs.php">Foreign Jobs</a>
        <a href="onlinejobs.php">Online Jobs</a>
      </div>
    </header>

    <div id="section1">

    
<div id="searchbar2">
  <form action="searchbar.php" method="POST">
    <input type="text" placeholder="Search.." name="search">
    <button type="submit">Search</button>
  </form>
</div>

<h1>Find the perfect job<br />that you deserve.</h1>
<h2 class="egkeyword">Search keywords e.g. Web Developer</h2>
</div>
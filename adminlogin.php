<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payrow</title>
    <link rel="stylesheet" href="styles/adminlogin.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
</head>
<body>-->

<?php
    include 'header.php';
?>
<!--
<link rel="stylesheet" href="styles/adminlogin.css">-->
    <div class="lg1maincontainer">
        <div class="lg1formcontainer">
            <div class="lg1logocontainer">
                <a href="index.php" title="Back to Homepage"><img src="images/logo.png"></a>
            </div>
            <div class="lg1greetlogin">
                <p>Welcome Back Admin</p>
            </div>
            <div class="lg1feildsconatiner">
                <form method="POST" action="adminloginvalidation.php" class="lg1form1">
                    <input type="text" class="lg1inputfeild" name="lg1username" placeholder="Username" required><br><br>
                    <input type="password" class="lg1inputfeild" name="lg1password" placeholder="Password" required><br><br>
                    <input type="submit" value="Log in" id="lg1loginbttn">
                </form>
            </div>
        </div>
    </div>


</body>
</html>




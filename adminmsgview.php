<?php
    include'header.php';
    include'adminsession.php';

    $id = $_GET['id'];

    $sql = "SELECT * FROM contactus WHERE id = '$id'";

    $result = $conn->query($sql);

    $row = $result -> fetch_assoc();
    /*$title = $row['job_title'];
    $cat = $row['category'];
    $sal = $row['salary'];
    $desc = $row['job_description'];*/

    $name = $row['name'];
    $email = $row['email'];
    $contact = $row['contact'];
    $msg = $row['msg'];
?>
<link rel="stylesheet" href="styles/admindash.css">
<style>
    select{
        width: 350px;
        height: 40px;
        border-radius: 20px;
    }
    .boxjv{
        background-image:url("images/ps/adminmsg.png");
    }
    .cardu3 input.esdetails{
        background-color: transparent;
        color: white;
        margin-left:70px;
    }
    .cardu3 input.esdetails:hover{
        background-color: #272e3a;
        border:none;
    }

</style>


<div class = "navbaradmin">
    <ul>
        <li>Dashboard</li>
        <li><a href="admindashboard.php"><button>Overview</button></a></li>
        <li><a href="admindashjsacc.php"><button style = "width: 200px;">Job Seeker Accounts</button></a></li>
        <li><a href="admindashempacc.php"><button style = "width: 200px;">Employer Accounts</button></a></li>
        <li><a href="adminpsotjv.php"><button style = "width: 210px;">Posted Job Vacancies</button></a></li>
        <li><a href="adminmsg.php"><button class = "active" >Messages</button></a></li>

    </ul>
</div>

<div class = "plate" style = "height:auto;">
        <div class = "container cont1" style = "width:80%;height:650px;">
            <!--<img src = "images/123.jpg">-->
            <div class = "box1 boxjv" style = "height:600px">
            <h2 style = "color:white">Message</h2>
        
            <div class = "cardu cardu1" style = "margin-left:80px;"></div>

            <!--<form action="adminpostjvupdateexecute.php" method="GET">-->

            <div class = "cardu cardu2">
            <br><br><br><br>
            <p>Name:</p>
            <input type="text" name="cat" id="" value = "<?php echo $name?>"><br><br>
            <p>Email:</p>
            <input type="text" name="cat" id="" value = "<?php echo $email?>"><br><br>
            <p>Contact Number:</p>
            <input type="text" name="cat" id="" value = "<?php echo $contact?>">
        <br><br>
        
    </div>  

    <div class = "cardu cardu3">
    <br><br><br><br>
        <p>Message :</p>
        <textarea name="desc" id="" cols="40" rows="40"><?php echo $msg?></textarea><br><br>
         
         <a href="adminmsg.php"><input class = "esdetails" type = "submit" value = "Go Back" name = "submit"></a>
    </div>  

    <form>
    <input type="text" name="jv_id" id="jv_id" value = "<?php echo $jv_id?>" style = "visibility:hidden"><br><br>
        <div class = "space" style="width: 100%; height: 80px;"></div> 
    </div>
    <div style="width: 100%; height: 80px;"></div>
</div>
<div style="width: 100%; height: 80px;"></div>

</div>


<?php
    include'footer.php';
?>
<?php
    include'header.php';
    include'adminsession.php';

    $js_id = $_GET['id'];

    $sql = "SELECT * FROM job_seeker WHERE ID = '$js_id'";

    $result = $conn->query($sql);

    $row = $result -> fetch_assoc();
    $fname = $row['Fullname'];
    $dob = $row['DateOFBirth'];
    $gdate = $row['GraduateDate'];
    $pcno = $row['PrimaryContact'];
    $pnu = $row['PhoneNumber'];
    $email = $row['Email'];
    $aline1 = $row['Street1'];
    $aline2 = $row['Street2'];
    $city = $row['City'];
    $province = $row['Province'];
    $pzcode = $row['PostalZipcode'];
    $passno = $row['PassportNumber'];
    $doi = $row['DateofIssue'];
    $vupto = $row['ValidUPTO'];
    $image = $row['profilepic'];

?>
<link rel="stylesheet" href="styles/admindash.css">




<div class = "navbaradmin">
    <ul>
        <li>Dashboard</li>
        <li><a href="admindashboard.php"><button>Overview</button></a></li>
        <li><a href="admindashjsacc.php"><button class = "active" style = "width: 200px;">Job Seeker Accounts</button></a></li>
        <li><a href="admindashempacc.php"><button style = "width: 200px;">Employer Accounts</button></a></li>
        <li><a href="adminpsotjv.php"><button style = "width: 210px;">Posted Job Vacancies</button></a></li>
        <li><a href="adminmsg.php"><button>Messages(<?php echo $row5 ?>)</button></a></li>

    </ul>
</div>

<div class = "plate" style = "height:auto;">
        <div class = "container cont1" style = "width:80%;height:940px">
            <!--<img src = "images/123.jpg">-->
            <div class = "box1 boxje" style = "height:880px">
            <h2>Job Seeker Account</h2>
        
            <div class = "cardu cardu1"></div>

            <form action="admindashjsaccupdateexecute.php" method="POST" enctype="multipart/form-data" >

            <div class = "cardu cardu2">
        <p>Full Name : </p><input type="text" name="fname" id="" value="<?php echo "$fname"?>"><br><br>
        <p>Date of Birth : </p><input type="date" name="dob" id="" value = "<?php echo "$dob"?>"><br><br>
        <p>Contact Number 1 : </p><input type="text" name="pcno" id="" value = "<?php echo "$pcno" ?>"><br><br>
        <p>Contact Number 2 : </p><input type="text" name="pnu" id="" value = "<?php echo "$pnu" ?>"><br><br>
        <p>Email : </p><input type="text" name="email" id="" value = "<?php echo "$email" ?>"><br><br>
        <p>Address Line 1 : </p><input type="text" name="aline1" id="" value = "<?php echo "$aline1" ?>"><br><br>
        <p>Address Line 2 : </p><input type="text" name="aline2" id="" value = "<?php echo "$aline2" ?>"><br><br>
        <p>City : </p><input type="text" name="city" id="" value = "<?php echo $city ?>"><br><br>
        <p>Province : </p><input type="text" name="province" id="" value = "<?php echo $province ?>"><br><br>
    </div>  

    <div class = "cardu cardu3">
         <img src="<?php echo $image?>" alt="" id = "" width = "150px" height = "150px"><br><br>
         <input type="file" class = "pic" style = "background:none" name = "pimage"><br><br>
         <p>Passport Number  : </p><input type="text" name="passno" id="" value = "<?php echo "$passno" ?>"><br><br>
         <p>Date of Issue : </p><input type="date" name="doi" id="" value = "<?php echo "$doi" ?>"><br><br>
         <p>Valid Upto : </p><input style = "color:white" type="date" name="vupto" id="" value = "<?php echo "$vupto" ?>"><br><br>
         <p>Postal Code  : </p><input type="text" name="pzcode" id="" value = "<?php echo "$pzcode" ?>"><br><br>
         <p>Graduated Date : </p><input type="date" name="gdate" id="" value = "<?php echo "$gdate" ?>"><br><br>
         <a href=""><input class = "esdetails" type = "submit" value = "Save Details" name = "submit"></a>
         <input type="text" name="jsid" id="" value = "<?php echo $js_id ?>" style = "visibility:hidden">
    </div>  

</form>
        
        <div class = "space" style="width: 100%; height: 80px;"></div> 
    </div>
    <div style="width: 100%; height: 80px;"></div>
</div>
<div style="width: 100%; height: 80px;"></div>

</div>


<?php
    include'footer.php';
?>
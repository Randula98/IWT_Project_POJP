<?php
    include'header.php';
    include'adminsession.php';

    $cmp_id = $_GET['id'];

    $sql = "SELECT * FROM employee WHERE ID = '$cmp_id'";

    $result = $conn->query($sql);

    $row = $result -> fetch_assoc();
    $loc = $row['Location'];
    $cname = $row['CompanyName'];
    $cdesc = $row['CompanyDescription'];
    $pcno = $row['PrimaryContact'];
    $pnu = $row['PhoneNumber'];
    $email = $row['Email'];
    $website = $row['Website'];
    $aline1 = $row['Street1'];
    $aline2 = $row['Street2'];
    $city = $row['City'];
    $province = $row['Province'];
    $pzcode = $row['PostalZipcode'];
    $cdetails = $row['CompanyDetails'];
    $image = $row['company_logo'];
?>
<link rel="stylesheet" href="styles/admindash.css">

<style>
    .cardu input, .cardu textarea{
    border: none;
    background-color: rgba(255,255,255,0.6);
    padding-left:10px;
    font-size: 18px;
    border-radius: 10px;
    }
    .cardu input{
        width: 370px;
        height: 40px;
    }
    input.pic{
        background-color: transparent;
    }
</style>

<div class = "navbaradmin">
    <ul>
        <li>Dashboard</li>
        <li><a href="admindashboard.php"><button>Overview</button></a></li>
        <li><a href="admindashjsacc.php"><button style = "width: 200px;">Job Seeker Accounts</button></a></li>
        <li><a href="admindashempacc.php"><button class = "active"  style = "width: 200px;">Employer Accounts</button></a></li>
        <li><a href="adminpsotjv.php"><button style = "width: 210px;">Posted Job Vacancies</button></a></li>
        <li><a href="adminmsg.php"><button>Messages(<?php echo $row5 ?>)</button></a></li>
    </ul>
</div>

<div class = "plate" style = "height:auto;">
        <div class = "container cont1 " style = "width:80%;height:1050px">
            <!--<img src = "images/123.jpg">-->
            
            
    <div class = "box1 boxeae" style = "height:1000px">
    <h2>Employer Account</h2>
    
   
    <div class = "cardu cardu1"></div>

    <form action="admindashempaccupdateexecute.php" method = "POST"  enctype="multipart/form-data" >
    
    <div class = "cardu cardu2">
            
    <p>Company Location :</p><input type="text" name="loc" id="" value = "<?php echo "$loc"?>"><br><br>
    <p>Company Name :</p><input type="text" name="cname" id="" value = "<?php echo "$cname"?>"><br><br>
    <p>Company Description :</p>
    <textarea name="cdesc" id="" cols="40" rows="10"><?php echo "$cdesc" ?></textarea><br><br>
    <p>Contact Number 1 :</p><input type="text" name="pcno" id="" value = "<?php echo "$pcno" ?>"></p><br>
    <p>Contact Number 2 :</p><input type="text" name="pnu" id="" value = "<?php echo "$pnu" ?>"></p><br>
    <p>Webiste :</p><input type="text" name="website" id="" value = "<?php echo "$website" ?>"></p><br>
    <p>Email :</p><input type="text" name="email" id="" value = "<?php echo "$email" ?>"></p><br>

    
        
    </div>  

    <div class = "cardu cardu3" style = "margin-left:20px">
    
     
    <img src="<?php echo $image?>" alt="" class = "complogo">
        <input type="file" class = "pic" style = "margin-top:20px" name = "pimage"><br><br>
        <p>Street Address Line 1 : </p><input type="text" name="aline1" id="" value = "<?php echo "$aline1" ?>"></p><br>
        <p>Street Address Line 2 : </p><input type="text" name="aline2" id="" value = "<?php echo "$aline2" ?>"></p><br>
        <p>City :</p><input type="text" name="city" id="" value = "<?php echo "$city" ?>"></p><br>
        <p>Province :</p><input type="text" name="province" id="" value = "<?php echo "$province" ?>"></p><br>
        <p>Postal/Zip code :</p><input type="text" name="pzcode" id="" value = "<?php echo "$pzcode" ?>"></p><br>
        <p>Company Details :</p>
        <textarea name="cdetails" id="" cols="40" rows="5"><?php echo "$cdetails" ?></textarea><br><br>
        <a href=""><input class = "esdetails" type = "submit" value = "Save Details" name = "submit"></a>
        <input type="text" name="cmpid" id="" value = "<?php echo "$cmp_id" ?>" style = "visibility:hidden"><br><br>
        <div class = "space" style="width: 100%; height: 80px;"></div> 
        
    </div>
    </form>
    <div style="width: 100%; height: 80px;"></div>
</div>

<div style="width: 100%; height: 80px;"></div>

</div>



<?php
    include'footer.php';
?>
<?php
    include'header.php';
    include'empsession.php';
?>
<link rel="stylesheet" href="styles/empdash.css">

<style>
    .card{
        height: 750px;
    }
    .card2 p{
        margin-left: 60px;
    }
    input.esdetails{
        border:none;
        background-color: gray;
        width: 170px;
        height: 50px;
        margin-left:160px;
        border-radius: 20px 0px 20px 0px;
        transition: 0.5s;
    }
    input.esdetails:hover{
        border-radius: 0px 20px 0px 20px;
        background-color: white;
        color: purple;
        border: 1px solid purple;
    }
    .card2{
        background-image: url("images/ps/empedit1.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    }
    .card3{
        background-image: url("images/ps/empedit2.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    }
    .card input,.card  textarea{
        background-color: rgba(255,255,255,0.6);
        /*padding: 10px;*/
        padding-left: 10px;
        border:none;
    }
    .card p{
        font-size: 25px;
    }
    .card{
        height:770px;
    }
</style>
 


<div class = "navbaremp">
    <ul>
        <li>Dashboard</li>
        <li><a href="empdashprofile.php"><button class = "active">Profile</button></a></li>
        <li><a href="empdashpostjob.php"><button style = "width: 150px;">Posted Vacancies</button></a></li>
        <li><a href="empdashjobapp.php"><button>Applications</button></a></li>
    </ul>
</div>

<div class = "plate">

    <div class = "container" style = "height:850px">

    <div class = "card card1">
    </div>

    <form action="empdasheditexecute.php"  method = "POST"  enctype="multipart/form-data" >
    <div class = "card card2">

    
    <div class = "card card1">
    </div>
    <br><br>

    <p>Company Name :</p>
    <input type="text" name="cname" id="" value = "<?php echo $cname ?>" ><br><br>
    <p>Company Description :</p>
    <textarea name="cdesc" id="" cols="50" rows="10" style = "margin-top:10px"><?php echo $cdesc ?></textarea><br><br>
    <p>Primary Contact :</p>
    <input type="text" name="pcno" id="" value = "<?php echo $pcno ?>" ><br><br>
    <p>Phone Number :</p>
    <input type="text" name="pnu" id="" value = "<?php echo $pnu ?>" ><br><br>
    <p>Webiste :</p>
    <input type="text" name="website" id="" value = "<?php echo $website ?>" ><br><br>
    <p>Email :</p>
    <input type="text" name="email" id="" value = "<?php echo $email ?>"><br><br>
    <input type="text" name="id" id="" value = "<?php echo $id ?>" style = "visibility:hidden">

    <input class = "esdetails" type = "submit" value = "Save Details" name = "submit">
    </div>
   

    
    <div class = "card card3">

        <img style="margin-top: 20px;" src="<?php echo $image?>" alt="" class = "complogo">
        <input type="file" class = "pic" style = "margin-left:70px; margin-top:20px;border:0px;background-color:transparent" name = "pimage"><br><br>
        <p>Location :</p>
        <input type="text" name="location" id="" value = "<?php echo $location ?>"><br><br>
        <p>Address Line 1 : </p>
        <input type="text" name="aline1" id="" value = "<?php echo $aline1?>"><br><br>
        <p>Address Line 2 :</p>
        <input type="text" name="aline2" id="" value = "<?php echo $aline2?>"><br><br>
        <p>City :</p>
        <input type="text" name="city" id="" value = "<?php echo $city?>"><br><br>
        <p>Province :</p>
        <input type="text" name="province" id="" value = "<?php echo $province?>"><br><br>
        <p>Postal/Zip code :</p>
        <input type="text" name="pzcode" id="" value = "<?php echo $pzcode?>"><br><br>
        <p>Password :</p>
        <input type="password" name="password" id="" value = "<?php echo $password?>"><br><br>
    </div>

    </form>

    </div>

</div>


<?php
    include'footer.php';
?>
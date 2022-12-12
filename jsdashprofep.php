<?php
    include'header.php';
    include'jssession.php';
?>


<link rel="stylesheet" href="styles/jsdash.css">
<style>
    .card input{
        margin-top: 20px;
        background-color: rgba(255,255,255,0.7);
        border: none;
        height: 40px;
        border-radius: 5px 10px 10px 5px;
        padding-left: 10px;
    }
    .card input.btn{
        width: 180px;
        height: 50px;
        border:none;
        background-color: grey;
        border-radius: 20px 0px 20px 0px;
        color: white;
        transition: 0.5s;
    }
    .card input.btn:hover{
        cursor: pointer;
        background-color: white;
        color: teal;
        border:1px solid gold;
        border-radius: 0px 20px 0px 20px;
    }

</style>

<div class = "navbar12">
    <ul>
        <li>Dashboard</li>
        <li><a href="jsdashprofile.php"><button class = "active">Profile</button></a></li active>
        <li><a href="jsdashfav.php"><button>Favourites</button></a></li>
        <!--<li><button>Settings</button></li>-->
    </ul>
</div>

<div class = "plate plateep" style = "height : 1200px">
<div style="width: 100%; height: 20px;"></div>  
    <!--<div class = "firstribbon">
      <div class = "firstribbon1">
        <img src="images/jsdashboard/propic.png" id = "propic" class = "propic" alt="">
      </div>  
   
        <div class = "firstribbon2">
            <h2 id = "first_name">First_name</h2>
            <h2 id = "last_name">Last_name</h2>
            <h2 id = "age">Age</h2>
            <h2 id = "city">City</h2>
        </div>
    </div>-->

    <div class = "secondribbon  jsdashed" style = "margin-top:20px; border-radius:0px; width:80%;height:1100px">
    <div style="width: 100%; height: 20px;"></div>
    
    
    <div class = "card card1" style = "width:50px">
    </div> 
    
    <form action = "jsdashprofepexecute.php" method = "POST"  enctype="multipart/form-data" >

    <div class = "card">
    
        <p>Full Name : </p><input type="text" name="fname" id="" value="<?php echo "$fname"?>"><br><br>
        <p>Date of Birth : </p><input type="date" name="dob" id="" value = "<?php echo "$dob"?>"><br><br>
        <p>Contact Number 1 : </p><input type="text" name="pcno" id="" value = "<?php echo "$pcno" ?>"><br><br>
        <p>Contact Number 2 : </p><input type="text" name="pnu" id="" value = "<?php echo "$pnu" ?>"><br><br>
        <p>Email : </p><input type="text" name="email" id="" value = "<?php echo "$email" ?>"><br><br>
        <p>Address Line 1 : </p><input type="text" name="aline1" id="" value = "<?php echo "$aline1" ?>"><br><br>
        <p>Address Line 2 : </p><input type="text" name="aline2" id="" value = "<?php echo "$aline2" ?>"><br><br>
        <p>City : </p><input type="text" name="city" id="" value = "<?php echo $city ?>"><br><br>
        <p>Province : </p><input type="text" name="province" id="" value = "<?php echo $province ?>"><br><br>
        <!--<a href="jsdashprofile.php"><button class = "edetails">Save Personal<br>details</button></a>-->
        <input class = "btn" type = "submit" value = "Save Details" name = "submit">
        
    </div>  
    
   
    <div class = "card card2">
         <img src="<?php echo $image ?>" alt="" id = "">
         <input style = "background:none;" type="file" class = "pic" name = "pimage"><br><br>
         <p>Passport Number  : </p><input type="text" name="passno" id="" value = "<?php echo "$passno" ?>"><br><br>
         <p>Date of Issue : </p><input type="date" name="doi" id="" value = "<?php echo "$doi" ?>"><br><br>
         <p>Valid Upto : </p><input type="date" name="vupto" id="" value = "<?php echo "$vupto" ?>"><br><br>
         <p>Postal Code  : </p><input type="text" name="pzcode" id="" value = "<?php echo "$pzcode" ?>"><br><br>
         <p>Graduated Date : </p><input type="date" name="gdate" id="" value = "<?php echo "$gdate" ?>"><br><br>
         <p>Password :</p><input type="password" name="password" id="" value = "<?php echo $password ?>"><br><br>
         <input type="text" name="id" id="" value = "<?php echo "$id" ?>"  style = "visibility:hidden"><br><br>
    </div>
    </form> 
    
    <div class = "card card1 cardleft" style = "width:10%">
    <a href="jsdashprofad.php"><button class = "ecdetails" style = "margin-left:-70px">Edit Academic<br>details</button></a>
    </div> 

    
    </div>
    
</div>

<!-- -->
<?php
    include'footer.php';
?>


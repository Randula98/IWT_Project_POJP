<?php
    include'header.php';
    include'jssession.php';

    
?>

<link rel="stylesheet" href="styles/jsdash.css">
<link rel="stylesheet" href="styles/jsdashprof.css">
<link rel="stylesheet" href="styles/jsdashad.css">
<style>
    .card input{
        margin-top: 20px ;
    }
    .widebox input.btn{
        width: 180px;
        height: 50px;
        border:none;
        background-color: grey;
        border-radius: 20px 0px 20px 0px;
        color: white;
        transition: 0.5s;
    }
    .widebox input.btn:hover{
        cursor: pointer;
        background-color: white;
        color: teal;
        border:1px solid gold;
        border-radius: 0px 20px 0px 20px;
    }
    body{
        background-image :url("images/ps/jsdashadedit.png");
    }

</style>
</style>
  

<div class = "navbar12">
    <ul>
        <li>Dashboard</li>
        <li><a href="jsdashprofile.php"><button class = "active">Profile</button></a></li active>
        <li><a href="jsdashfav.php"><button>Favourites</button></a></li>
        <!--<li><button>Settings</button></li>-->
    </ul>
</div>

<div class = "plate" style="height:auto;">
<div style="width: 100%; height:auto;"></div>  
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

    
    <div class = "secondribbon addepjs" style = "margin-top:20px; border-radius:0px;height:auto;">
    <div style="width: 100%; height: 20px;"></div>
    
    <div class = "card card1"></div>

    <div class = "cardep" style = "height:auto;width:1000px">
        <div class = "widebox" style = "height:auto;width:1100px;margin-left:30px"><br>
        <center>
        <form action = "jsdashprofadexecute.php" method = "GET">
            <p>Highest Qualifications</p>
            <input type = "text" name= "HighestQualification1" class ="Highest Qualification" placeholder="Highest Qualification" autocomplete="off" value = "<?php echo $hq1 ?>" ><br>
            <input type = "text" name= "HighestQualification2" class ="Highest Qualification" placeholder="" autocomplete="off" value = "<?php echo $hq2 ?>" ><br>
            <input type = "text" name= "HighestQualification3" class ="Highest Qualification" placeholder="" autocomplete="off" value = "<?php echo $hq3 ?>" ><br><br>
                   
            <p>Post Graduates</p>
            <input type = "text" name= "PostGraduate1" class ="Post Graduate" placeholder="Post Graduate" autocomplete="off" value = "<?php echo $pg1 ?>" ><br>
            <input type = "text" name= "PostGraduate2" class ="Post Graduate" placeholder="" autocomplete="off" value = "<?php echo $pg2 ?>" ><br>
            <input type = "text" name= "PostGraduate3" class ="Post Graduate" placeholder="" autocomplete="off" value = "<?php echo $pg3 ?>" ><br><br>
                   
            <p>Equalent Diplomas</p>
            <input type = "text" name= "EquivalentDiploma1" class ="Equivalent Diploma" placeholder="Equivalent Diploma" autocomplete="off" value = "<?php echo $ed1 ?>" ><br>              
            <input type = "text" name= "EquivalentDiploma2" class ="Equivalent Diploma" placeholder="" autocomplete="off" value = "<?php echo $ed2 ?>" ><br>          
            <input type = "text" name= "EquivalentDiploma3" class ="Equivalent Diploma" placeholder="" autocomplete="off" value = "<?php echo $ed3 ?>" ><br><br>
                   
            <p>Anyother Qualifications</p>
            <input type = "text" name= "AnyotherQualification1" class ="Any other Qualification" placeholder="Any other Qualification" autocomplete="off" value = "<?php echo $aoq1 ?>" ><br>      
            <input type = "text" name= "AnyotherQualification2" class ="Any other Qualification" placeholder="" autocomplete="off" value = "<?php echo $aoq2 ?>" ><br>          
            <input type = "text" name= "AnyotherQualification3" class ="Any other Qualification" placeholder="" autocomplete="off" value = "<?php echo $aoq3 ?>" ><br><br>
                   
            <p>Work Experiences</p>
            <input type = "text" name= "WorkExperienceDetails1" class ="Work Experience Details" placeholder="Work Experience Details" autocomplete="off" value = "<?php echo $wed1 ?>" ><br>      
            <input type = "text" name= "WorkExperienceDetails2" class ="Work Experience Details" placeholder="" autocomplete="off" value = "<?php echo $wed2 ?>" ><br>
            <input type = "text" name= "WorkExperienceDetails3" class ="Work Experience Details" placeholder="" autocomplete="off" value = "<?php echo $wed3 ?>" ><br><br>

            <p>Declaration</p>
            <input type = "text" name= "Declaration1" class ="Declaration" placeholder="Declaration" autocomplete="off" value = "<?php echo $d1 ?>" ><br>      
            <input type = "text" name= "Declaration2" class ="Declaration" placeholder="" autocomplete="off" value = "<?php echo $d2 ?>" ><br>      
            <input type = "text" name= "Declaration3" class ="Declaration" placeholder="" autocomplete="off" value = "<?php echo $d3 ?>" ><br><br>
                   
            <p>Achivements / Scholarships</p>
            <input type = "text" name= "acs1" class ="Declaration" placeholder="Declaration" autocomplete="off" value = "<?php echo $acs1 ?>" ><br>      
            <input type = "text" name= "acs2" class ="Declaration" placeholder="" autocomplete="off" value = "<?php echo $acs2 ?>" ><br>      
            <input type = "text" name= "acs3" class ="Declaration" placeholder="" autocomplete="off" value = "<?php echo $acs3 ?>" ><br><br>

            <input class = "btn" type = "submit" value = "Save Details" name = "submit"><br>
            <!--<a href="jsdashprofile.php"><button class = "edetails">Save Personal<br>details</button></a>-->
            <input type="text" name = "id" value = "<?php echo $id ?>" style = "visibility:hidden">
           </form></center>
           <br><br>
        </div>

        <br><br>

    </div>  
    
    </div>


    <br><br>
</div>


<?php
    include'footer.php';
?>


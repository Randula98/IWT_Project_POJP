<?php
    include'header.php';
    include'jssession.php';
?>

<link rel="stylesheet" href="styles/jsdashprof.css">
<link rel="stylesheet" href="styles/jsdash.css"> 

<style>
    table{
        text-align: center;
    }
    button.table{
        margin-left:0px;
    }
    .jsdash1,.jsdash2{
        background-color: #25292fa3;
        border-radius: 10px;
    }
    .jsdash1 input:disabled{
        color: white;
        font-family: calibri;
        width:500px;
        height: 60px;     
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


<div class = "plate dashplate" style = "height:850px;">
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

    <div class = "secondribbon" style = "margin-top:20px; height:750px">
    <div style="width: 100%; height: 20px;"></div>

    <div class = "card card1">
    </div>  
    


    <div class = "card " style = " width:55%;">

        <div class = "mediumbox medup jsdash1" >
        <div class = "smallbox"><input style = "font-size:45px" type="text" placeholder="Full name" disabled value = "<?php echo $fname ?>"></div>
        <div class = "smallbox level2"><input type="text" placeholder="Email" disabled value = "<?php echo $email ?>"></div>
        <div class = "smallbox level2"><input type="text" placeholder="Email" disabled value = "<?php echo $pcno ?>"></div>
    </div>

        <div class = "mediumbox medfav jsdash2" style = "height:370px; width:1000px"><h2 id = "" style = "color:white">Favourites</h2>
<!---->
        <table style = "margin-left:45px">
            <tr>
                <th style = "border-radius:10px 0px 0px 10px">Job Title</th>
                <th>Job Category</th>
                <th>Company Name</th>
                <th style = "border-radius:0px 10px 10px 0px">View</th>
            </tr>
            <?php
                $sql = "SELECT * FROM jsfav WHERE js_id = '$id'";
                $result = $conn->query($sql);

                if ($result -> num_rows > 0)
                {
                    $i=0;
                    while($row = $result -> fetch_assoc())
                    { 
                        $sql2 = "SELECT * FROM job WHERE job_id = '$row[job_id]'";
                        $result2 = $conn->query($sql2);
                        $row2 = $result2->fetch_assoc();
                        $cat = $row2["category"];

                        echo'<tr><td>'.$row["job_title"].'</td><td>'.$row["comp_name"].'</td><td>'.$cat.'</td>';
                        
                        echo"<td><a target = '_BLANK' href='moredetailsdynamic.php?jid=$row[job_id]'><button class = 'table'>View</button></a></td><tr>";

                        if ($i == 2)
                        {
                            break;
                        }
                        $i++;
                    }
                }
            ?>     

        </table> 
        <a href="jsdashfav.php" style = "margin-left:320px"><button style = "width: 150px;" class = "edets fav">See more</button></a>
        </div>
        
    </div>  
    <div class = "card card2 " style = "height:200px">
        <div style = "margin-left:100px;">
            <img class = "profile" src="<?php echo $image?>" alt="" style = "margin-left:100px;width:200px;height:200px"><br>
            <a href="jsdashprofep.php"><button class = "edets">Edit Personal<br>details</button></a>
        </div>
    
    <!--<div class = "mediumbox boxmsg jsdash3" style = "height:250px"><h2 id = "">Messages</h2>

        <div>
            <input type="text" name="" id="" placeholder="10" disabled>
            <h3>Total Messages</h3>
        <a href="jsdashmsg.php" style = "margin-left:-40px"><button class = "edets fav">See more</button></a>
        </div>

        

    </div>-->
    </div>  

    </div>
</div>


<?php
    include'footer.php';
?>


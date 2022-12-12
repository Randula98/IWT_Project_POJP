<?php
    include'header.php';
    include'adminsession.php';
?>

<?php
    $sql1 = "SELECT * FROM job_seeker";
    $res1 = mysqli_query($conn , $sql1);
    $row1 = mysqli_num_rows($res1);

    $sql2 = "SELECT * FROM employee";
    $res2 = mysqli_query($conn , $sql2);
    $row2 = mysqli_num_rows($res2);

    $sql3 = "SELECT * FROM job";
    $res3 = mysqli_query($conn , $sql3);
    $row3 = mysqli_num_rows($res3);

    $sql4 = "SELECT * FROM payment";
    $res4 = mysqli_query($conn , $sql4);
    $row4 = mysqli_num_rows($res4);

    $row4 = 14.99 * $row4;

    $sql6 = "SELECT * FROM jsapplication";
    $res6 = mysqli_query($conn , $sql6);
    $row6 = mysqli_num_rows($res6);
?>
<link rel="stylesheet" href="styles/admindash.css">

<style>
    .smallhead{
        background-color: transparent;
    }
    .card table, .card tr, .card td{
        border:0px;
        visibility: hidden;
    }
</style>

<div class = "navbaradmin">
    <ul>
        <li>Dashboard</li>
        <li><a href="admindashboard.php"><button class = "active">Overview</button></a></li>
        <li><a href="admindashjsacc.php"><button style = "width: 200px;">Job Seeker Accounts</button></a></li>
        <li><a href="admindashempacc.php"><button style = "width: 200px;">Employer Accounts</button></a></li>
        <li><a href="adminpsotjv.php"><button style = "width: 210px;">Posted Job Vacancies</button></a></li>
        <li><a href="adminmsg.php"><button>Messages(<?php echo $row5 ?>)</button></a></li>
    </ul>
</div>
    <div class = "container" style = "height:1700px">
        <div class = "card card1">

        </div>
        <br>
        <table width= "80%" style = "border:0px;">
        <tr style = "border:0px;">
            <td width= "25%" style = "border:0px;">
                <img src ="images/icon4.png" style="width:130px; height:130;">
            </td>
            <td width ="25%" style = "border:0px;">
                <img src ="images/icon3.png" style="width:140px; height:140px;">
            </td>
            <td width="25%" style = "border:0px;">
                <img src ="images/icon.svg" style="width:130px; height:140px;">
            </td>
            <td width = "20%"  style = "border:0px;">
                <img src ="images/icon5.png" style="width:130px; height:130px;">
            </td>
            <td width = "20%" style = "border:0px;">
                <img src ="images/icon2.png" style="width:120px; height:120px;">
            </td>
        </tr>
    </table>

        <div class = "card card2" style = "width:90%; margin-left:60px">
            <div class = "smallhead" style = "margin-left:20px">
                <h2>Job seeker<br>Accounts</h2>
                <h1 id = ""><?php echo $row1?></h1>
            </div>
            <div class = "smallhead"  style = "margin-left:80px">
                <h2>Employer<br>Accounts</h2>
                <h1 id = ""><?php echo $row2 ?></h1>
            </div>

        <!--</div>

        <div class = "card card3">-->

            <div class = "smallhead" style = "margin-left:10px">
                <h2>Posted Job<br>Vacancies</h2>
                <h1 id = "" value = ><?php echo $row3 ?></h1>
            </div>
            <div class = "smallhead"  style = "margin-left:10px">
                <h2>Job seeker<br>Applications</h2>
                <h1 id = ""><?php echo $row6 ?></h1>
            </div>
            <div class = "smallhead">
                <h2>Total <br>Income</h2>
                
                <h1 id = "" style = "margin-left:50px"><?php echo $row4 ?>$</h1>
            </div>
        </div>

        <div class = "tablebox box1 box13">
        <h2>Job seeker Accounts</h2>
        <table>
            <tr>
                <th style = "width:80px;">ID</th>
                <th style = "width:200px;">Name</th>
                <th>Contact Number</th>
                <th style = "width:250px;">Address</th>
                <th style = "width:200px;">Email</th>
                <th>Passport Number</th>
                <th>Valid Until</th>
            </tr>
            <?php 

                $sql = "SELECT * FROM job_seeker";
                $result = $conn->query("$sql");
                

                if ($result -> num_rows > 0)
                {
                    $i=0;
                    while($row = $result -> fetch_assoc())
                    {
                    
                    echo '<tr>
                    <th style = "width:80px;">'.$row["ID"].'</th><td>'.$row["Fullname"].'</td><td>'.$row["PrimaryContact"].'</td><td>'.$row["Street1"]." ".$row['Street2']." ".$row["City"].'</td><td>'.$row["Email"].'</td><td>'.$row["PassportNumber"].'</td><td>'.$row["ValidUPTO"].'</td></tr>';
                    
                    $i++;

                        if ($i == 3)
                        {
                          break;
                        }
                    }
                }
                
            ?>
            <br>
            

        </table><br>
        <a href="admindashjsacc.php" style = "margin-left:30px"><button>See more..</button></a>

        </div>

        <div class = "tablebox box2">
        <h2>Employer Accounts</h2>
        <table>
            <tr>
                <th style = "width:80px;">ID</th>
                <th style = "width:200px">Company Name</th>
                <th>Contact Number</th>
                <th style = "width:250px">Address</th>
                <th>Email</th>
                <th>Website</th>
                <th>Location</th>
            </tr>
            <?php 
                $sql = "SELECT * FROM employee";
                $result = $conn->query("$sql");
                

                if ($result -> num_rows > 0)
                {
                    $i=0;
                    while($row = $result -> fetch_assoc())
                    {
                    
                    echo '<tr>
                    <th style = "width:80px;">'.$row["ID"].'</th><td>'.$row["CompanyName"].'</td><td>'.$row["PrimaryContact"].'</td><td>'.$row["Street1"]." ".$row["Street2"]." ".$row["City"].'</td><td>'.$row["Email"].'</td><td>'.$row["Website"].'</td><td>'.$row["Location"].'</td></tr>';
                    
                    $i++;

                        if ($i == 3)
                        {
                          break;
                        }
                    }
                }
            ?>
            
            <br>
            

        </table><br>
        <a href="admindashempacc.php" style = "margin-left:30px"><button>See more..</button></a>

        </div>

        <div class = "tablebox box box3">
        <h2>Posted Job Vacancies</h2>
        <table>
            <tr>
                <th style = "width:80px;">ID</th>
                <th style = "width:200px">Job Title</th>
                <th>Job Category</th>
                <th style = "width:250px">Job Salary</th>
                <th style = "width:250px">Company Name</th>
            </tr>
            
            <?php 
                $sql = "SELECT * FROM job ORDER BY job_id DESC";
                $result = $conn->query("$sql");
                

                if ($result -> num_rows > 0)
                {
                    $i=0;
                    while($row = $result -> fetch_assoc())
                    {

                    $sql2 = "SELECT * FROM employee WHERE ID = '$row[cid]'";
                    $result2 = $conn->query($sql2);
                    $row2 = $result2->fetch_assoc();
                    $cname = $row2['CompanyName'];
                    
                    echo '<tr>
                    <th style = "width:80px;">'.$row["job_id"].'</th><td>'.$row["job_title"].'</td><td>'.$row["category"].'</td><td>'.$row["salary"].'</td><td>'.$cname.'</td></tr>';
                    
                    $i++;

                        if ($i == 3)
                        {
                          break;
                        }
                    }
                }
            ?>
            <br>
            

        </table><br>
        
        <a href="adminpsotjv.php" style = "margin-left:30px"><button>See more..</button></a>

        </div>

    </div>
    <br><br>
    

</div>


<?php
    include'footer.php';
?>
<?php
    include'header.php';
    include'adminsession.php';
?>
<link rel="stylesheet" href="styles/admindash.css">




<div class = "navbaradmin">
    <ul>
        <li>Dashboard</li>
        <li><a href="admindashboard.php"><button>Overview</button></a></li>
        <li><a href="admindashjsacc.php"><button style = "width: 200px;" class = "active">Job Seeker Accounts</button></a></li>
        <li><a href="admindashempacc.php"><button style = "width: 200px;">Employer Accounts</button></a></li>
        <li><a href="adminpsotjv.php"><button style = "width: 210px;">Posted Job Vacancies</button></a></li>
        <li><a href="adminmsg.php"><button>Messages(<?php echo $row5 ?>)</button></a></li>
    </ul>
</div>

<div class = "plate" style = "height:auto">
    <div class = "container cont1" style = "width:95%;">
            <!--<img src = "images/123.jpg">-->
            <div class = "box1 jsbox" style = "height:auto">
            <h2>Job seeker Accounts</h2>
            <table>
            <tr>
                <th style = "width:80px;">ID</th>
                <th>Name</th>
                <th>Contact Number</th>
                <th>Address</th>
                <th style = "width:180px;">Email</th>
                <th>Passport Number</th>
                <th>Valid Until</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php 

                $sql = "SELECT * FROM job_seeker";
                $result = $conn->query("$sql");
                

                if ($result -> num_rows > 0)
                {
                   
                    while($row = $result -> fetch_assoc())
                    {
                    
                    echo '<tr><th style = "width:80px;">'.$row["ID"].'</th><td>'.$row["Fullname"].'</td><td>'.$row["PrimaryContact"].'</td><td>'.$row["Street1"]." ".$row["City"].'</td><td>'.$row["Email"].'</td><td>'.$row["PassportNumber"].'</td><td>'.$row["ValidUPTO"].'</td>';
                    echo "<td><a href = 'admindashjsaccupdate.php?id=$row[ID]'> <input class = 'btn' type = 'submit' value = 'update'></a></td>";
                    echo "<td><a href = 'adminjsaccdelete.php?id=$row[ID]'> <input class = 'btn' type = 'submit' value = 'delete'></a></td></tr>";
                    }
                }//<a href="admindashjsaccdelete.php">Delete</a>
                
            ?>
            <br>
            

        </table>
        
        <div class = "space" style="width: 100%; height: 80px;"></div> 
        
    </div>
    <div style="width: 100%; height: 80px;"></div>
</div>
<div style="width: 100%; height: 80px;"></div>
</div>
<?php
    include'footer.php';
?>


                
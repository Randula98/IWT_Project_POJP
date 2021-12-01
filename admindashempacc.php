<?php
    include'header.php';
    include'adminsession.php';
?>
<link rel="stylesheet" href="styles/admindash.css"> 

<div class = "navbaradmin">
    <ul>
        <li>Dashboard</li>
        <li><a href="admindashboard.php"><button>Overview</button></a></li>
        <li><a href="admindashjsacc.php"><button style = "width: 200px;">Job Seeker Accounts</button></a></li>
        <li><a href="admindashempacc.php"><button class = "active" style = "width: 200px;">Employer Accounts</button></a></li>
        <li><a href="adminpsotjv.php"><button style = "width: 210px;">Posted Job Vacancies</button></a></li>
        <li><a href="adminmsg.php"><button>Messages(<?php echo $row5 ?>)</button></a></li>

        
    </ul>
</div>

<div class = "plate" style = "height:auto;">
        <div class = "container cont1" style = "width:95%;">
            <!--<img src = "images/123.jpg">-->
            <div class = "box1" style = "height:auto">
            <h2>Employer Accounts</h2>
            <table>
            <tr>
                <th style = "width:80px;">ID</th>
                <th>Company Name</th>
                <th>Contact Number</th>
                <th>Address</th>
                <th>Email</th>
                <th>Website</th>
                <th>Location</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php 
                $sql = "SELECT * FROM employee";
                $result = $conn->query("$sql");
                

                if ($result -> num_rows > 0)
                {
                    while($row = $result -> fetch_assoc())
                    {
                    
                    echo '<tr><th style = "width:80px;">'.$row["ID"].'</th><td>'.$row["CompanyName"].'</td><td>'.$row["PrimaryContact"].'</td><td>'.$row["Street1"]." ".$row["Street2"]." ".$row["City"].'</td><td>'.$row["Email"].'</td><td>'.$row["Website"].'</td><td>'.$row["Location"].'</td>';
                    
                    echo "<td><a href = 'admindashempaccupdate.php?id=$row[ID]'> <input class = 'btn' type = 'submit' value = 'update'></a></td>";
                    echo "<td><a href = 'adminempaccdelete.php?id=$row[ID]'> <input class = 'btn' type = 'submit' value = 'delete'></a></td></tr>";
                   
                    }
                }
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




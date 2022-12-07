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
        <li><a href="admindashempacc.php"><button style = "width: 200px;">Employer Accounts</button></a></li>
        <li><a href="adminpsotjv.php"><button style = "width: 210px;">Posted Job Vacancies</button></a></li>
        <li><a href="adminmsg.php"><button class = "active" s>Messages(<?php echo $row5 ?>)</button></a></li>

    </ul>
</div>

<div class = "plate" style="height: auto;">
<div class = "container cont1" style = "width:95%;">
            <!--<img src = "images/123.jpg">-->
            <div class = "box1" style = "height:auto">
            <h2>Messages</h2>
            <table>
            <tr>
                <th style = "width:80px;">ID</th>
                <th style = "width:220px;">Name</th>
                <th style = "width:300px;">Email</th>
                <th style = "width:220px;">Contact Number</th>
                <th>View</th>
                <th>Delete</th>
            </tr>
            
            <?php 
                $sql = "SELECT * FROM contactus";
                $result = $conn->query($sql);
                

                if ($result -> num_rows > 0)
                {
                    //$i=0;
                    while($row = $result -> fetch_assoc())
                    {
                    
                    echo '<tr>
                    <th style = "width:80px;">'.$row["id"].'</th><td>'.$row["name"].'</td><td>'.$row["email"].'</td><td>'.$row["contact"].'</td>';
                    echo "<td><a href = 'adminmsgview.php?id=$row[id]'> <input class = 'btn' type = 'submit' value = 'View'></a></td>";
                    echo "<td><a href = 'adminmsgdelete.php?id=$row[id]'> <input class = 'btn' type = 'submit' value = 'Delete'></a></td></tr>";
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



        
                
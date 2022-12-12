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
        <li><a href="adminpsotjv.php"><button  class = "active" style = "width: 210px;">Posted Job Vacancies</button></a></li>
        <li><a href="adminmsg.php"><button>Messages(<?php echo $row5 ?>)</button></a></li>

    </ul>
</div>

<div class = "plate" style="height: auto;">
<div class = "container cont1" style = "width:95%;">
            <!--<img src = "images/123.jpg">-->
            <div class = "box1" style = "height:auto">
            <h2>Posted Job Vacancies</h2>
            <table>
            <tr>
                <th style = "width:80px;">ID</th>
                <th style = "width:220px;">Job Title</th>
                <th>Job Category</th>
                <th style = "width:220px;">Job Salary</th>
                <th>Company Name</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            
            <?php 
                $sql = "SELECT * FROM job";
                $result = $conn->query("$sql");
                

                if ($result -> num_rows > 0)
                {
                    //$i=0;
                    while($row = $result -> fetch_assoc())
                    {
                        //$sql2 = "SELECT * FROM employee WHERE ID = $row[cid]";
                        //$result2 = $conn->query($sql);
                        //$row2 = $result2->fetch_assoc();
                        //$cname = $row2['CompanyName'];

                        $sql2 = "SELECT * FROM employee WHERE ID = '$row[cid]'";
                        $result2 = $conn->query($sql2);
                        $row2 = $result2->fetch_assoc();
                        $cname = $row2['CompanyName'];
        
                    
                    echo "<tr>
                    <th style = 'width:80px;'>$row[job_id]</th><td>$row[job_title]</td><td>$row[category]</td><td>$row[salary]</td><td>$cname</td>";
                    echo"<td><a target = '_BLANK' href='moredetailsdynamic.php?jid=$row[job_id]'><input class = 'btn' type = 'submit' value = 'View'></a></td>";
                    echo "<td><a href = 'adminpostjvupdate.php?id=$row[job_id]'> <input class = 'btn' type = 'submit' value = 'update'></a></td>";
                    
                    if($row["job_id"] < 60)
                        {
                            echo "<td><a href = ''> <input class = 'btn' type = 'submit' value = 'delete'></a></td></tr>";
                        }
                    else
                        {
                            echo "<td><a href = 'adminpostjvdelete.php?id=$row[job_id]'> <input class = 'btn' type = 'submit' value = 'delete'></a></td></tr>";
                        }
                    
                    
                    
                    /*$i++;

                        if ($i == 3)//adminjsaccdelete.php?id=$row[job_id]  adminpostjvupdate.php?id=$row[job_id]
                        {
                          break;
                        }*/
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



        
                
<?php
    include'header.php';
    include'empsession.php';
?>
<link rel="stylesheet" href="styles/empdash.css">


  

<div class = "navbaremp">
    <ul>
        <li>Dashboard</li>
        <li><a href="empdashprofile.php"><button>Profile</button></a></li>
        <li><a href="empdashpostjob.php"><button style = "width: 150px;">Posted Vacancies</button></a></li>
        <li><a href="empdashjobapp.php"><button class = "active">Applications</button></a></li>
    </ul>
</div>

<div class = "plate" style = "height:auto">

    <div class = "container" style = "height:auto">  
        <div class = "favset">
            <br>
            <table>
            <tr>
                <th>Name</th>
                <th>Job Vacancy</th>
                <th>Contact Number</th>
                <th>View More</th>
                <th>Delete</th>
            <?php
                $sql2 = "SELECT * FROM jsapplication WHERE comp_id = '$id'";
                $result2 = $conn->query($sql2);
                
                if($result2-> num_rows > 0)
                {
                    while ($row = $result2->fetch_assoc())
                    {
                        echo '<tr><td>'.$row["js_name"].'</td><td>'.$row["vacancy_title"].'</td><td>'.$row["js_contact"].'</td>';
                        echo "<td><a href='jobskrprofile.php?jid=$row[js_id]' target = '_BLANK'><button class = 'table'>View</button></a></td>";
                        echo "<td><a href='empdashjobappdelete.php?jid=$row[id]'><button class = 'table'>Delete</button></a></td></tr>";
                    }
                }
                else
                {
                    echo "No Applications";
                }
            
            
            ?>
            
            
            
            
            <!--</tr>
                <td></td><td></td><td></td>
                <td><a href=""><button class = "table">View More</button></a></td>
                <td><a href=""><button class = "table">Delete</button></a></td>
            </tr>-->
            
            </table>
            <br><br>
        </div>
        <br><br>
    </div>
    <br><br>

</div>

<?php
    include'footer.php';
?>
<?php
    include'header.php';
    include'empsession.php';//session error
?>


<link rel="stylesheet" href="styles/empdash.css">
<style>
    table{
        text-align: center;
    }
    
</style>

 

<div class = "navbaremp">
<ul>
        <li>Dashboard</li>
        <li><a href="empdashprofile.php"><button>Profile</button></a></li>
        <li><a href="empdashpostjob.php"><button style = "width: 150px;" class = "active">Posted Vacancies</button></a></li>
        <li><a href="empdashjobapp.php"><button>Applications</button></a></li>
    </ul>
</div>

<div class = "plate" style = "height:auto">

    <div class = "container" style = "height:auto">  
        <div class = "favset">
            <br>
            <table>
            <tr>
                <th>Vacancy ID</th>
                <th>Job Title</th>
                <th>View</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            <?php

                $sql2 = "SELECT * FROM job WHERE cid = $id";
                $result2 = $conn->query($sql2);

                if($result2-> num_rows > 0)
                {
                    while($row = $result2 -> fetch_assoc())
                    {
                        echo '<tr><td>'.$row["job_id"].'</td><td>'.$row["job_title"].'</td>';
                        echo "<td><a target = '_BLANK' href='moredetailsdynamic.php?jid=$row[job_id]'><button class = 'table'>View</button></a></td>";
                        echo "<td><a href='empdashpostjobupdate.php?id=$row[job_id]'><button class = 'table'>Update</button></a></td>";
                        if($row["job_id"] < 60)
                        {
                            echo "<td><a href=''><button class = 'table'>Delete</button></a></td></tr>";
                        }
                        else
                        {
                            echo "<td><a href='empdashpostjobdelete.php?id=$row[job_id]'><button class = 'table'>Delete</button></a></td></tr>";
                        }
                    }
                }
                else
                {
                    echo "No Records";
                }
                
            ?>
            
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
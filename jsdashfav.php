<?php
    include'header.php';
    include'jssession.php';
?>

<link rel="stylesheet" href="styles/jsdash.css">
<style>
    table{
        
        text-align: center;
    }
    button.table
    {
        margin-left: 0px;
    }
    td , button.table{
        color: black;
    }
</style>


<div class = "navbar12">
    <ul>
        <li>Dashboard</li>
        <li><a href="jsdashprofile.php"><button>Profile</button></a></li>
        <li><a href="jsdashfav.php"><button class = "active">Favourites</button></a></li active>
        <!--<li><button>Settings</button></li>-->
    </ul>
</div>

<div class = "plate" style = "height:auto">

<div style="width: 100%; height: 20px;"></div>  

    <div class = "secondribbon" style = "height:auto">
        <div class = "favset fav" style = "height:auto">
            <h1 style="padding:10px">Favorite Vacancies</h1>
        <table style = "margin-left:15px;">
            <tr>
                <th>Job Title</th>
                <th>Job Company</th>
                <th>Job Category</th>
                <th>View</th>
                <th>Remove</th>
            </tr>

            <?php
                $sql = "SELECT * FROM jsfav WHERE js_id = '$id'";
                $result = $conn->query($sql);

                if ($result -> num_rows > 0)
                {
                    while($row = $result -> fetch_assoc())
                    { 
                        $sql2 = "SELECT * FROM job WHERE job_id = '$row[job_id]'";
                        $result2 = $conn->query($sql2);
                        $row2 = $result2->fetch_assoc();
                        $cat = $row2["category"];

                        echo'<tr><td>'.$row["job_title"].'</td><td>'.$row["comp_name"].'</td><td>'.$cat.'</td>';
                        //if($row['job_id'] < 60)
                        //{
                            //echo"<td><a href='moredetailsdynamic.php?jid=$row[job_id]'><button class = 'table'>View</button></a></td>";
                        //}
                        ///else
                        //{
                            echo"<td><a target = '_BLANK' href='moredetailsdynamic.php?jid=$row[job_id]'><button class = 'table'>View</button></a></td>";
                        //}
                        echo"<td><a href='jsdashfavdelete.php?id=$row[id]'><button class = 'table''>Delete</button></a></td></tr>";
                    }
                }
            ?>          
                       
            <!--
            <tr>
                <td style = "width:50px"></td><td></td><td></td>
                <td><a href=""><button class = "table">View</button></a></td>
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
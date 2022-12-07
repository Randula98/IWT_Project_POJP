<?php
    include'header.php';
    include'empsession.php';
?>



<link rel="stylesheet" href="styles/empdash.css">
<style>
    button:hover{
        border:1px solid purple;
        background-color: red;
    }
    .card2{
        background-image: url("images/ps/empdash1.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    }
    .card3{
        background-image: url("images/ps/empdash2.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    }
    .container{
        width:95%;
    }
    .carddash input:disabled{
        font-family: 'Roboto', sans-serif;
    }
</style> 

<div class = "navbaremp">
<ul>
        <li>Dashboard</li>
        <li><a href="empdashprofile.php"><button class = "active">Profile</button></a></li>
        <li><a href="empdashpostjob.php"><button style = "width: 150px;">Posted Vacancies</button></a></li>
        <li><a href="empdashjobapp.php"><button>Applications</button></a></li>
    </ul>
</div>

<div class = "plate">

    <div class = "container" style = "height:850px">  

    <div class = "card card1 carddash" style = "border:0px">
    </div>

        <div class = "card card2 carddash">
        <input style = "font-weight:bold;font-size:40px" type="text" placeholder="Company Name" disabled value="<?php echo $cname?> Company">
        <input type="text" placeholder="Location" disabled  value="<?php echo $location?>">
        <input type="text" placeholder="Company Number" disabled value="<?php echo $pcno?>"></form>
        <!--<div class = "smallbox"><h2 id = "">Mawaththa</h2></div>-->
        <br><br>
        <!--<div class = "smallbox level2"><h2 id = "">Age</h2></div>
        <div class = "smallbox level2"><h2 id = "">Kegalle</h2></div>-->
        <br><br>

        <div class = "mediumbox" style = "width:700px;margin-top:-10px;margin-left:10px"><h2 id = "">Recent Applications</h2>
            <table>
            <tr>
                <th style = "border-radius:5px 0px 0px 5px">Name</th>
                <th style="width:300px">Job Vacancy</th>
                <th style = "border-radius:0px 5px 5px 0px">Contact number</th>
            </tr>

            <?php
                $sql2 = "SELECT * FROM jsapplication WHERE comp_id = '$id' ORDER BY id DESC";
                $result2 = $conn->query($sql2);
                
                if($result2-> num_rows > 0)
                {   
                    $i=0;
                    while ($row = $result2->fetch_assoc())
                    {
                        $i++;
                        echo '<tr><td>'.$row["js_name"].'</td><td>'.$row["vacancy_title"].'</td><td>'.$row["js_contact"].'</td></tr>';
                        
                        if($i == 3)
                        {
                            break;
                        }
                    }
                }
                else
                {
                    echo "No Applications";
                }
            
            
            ?>
            
            </table>

            <br>
        <a href="empdashpostjob.php" style = "margin-left:130px"><button>See more..</button></a>
        </div>

        </div>

        <div class = "card card3" style = "width:41%">
            <img style = "margin-top:30px" src="<?php echo $image ?>" alt="" class = "complogo">
            <a href="empdashedit.php" style = "margin-left:-30px"><button>Edit Company<br>Details</button></a>

            <div class = "mediumbox msgbox" style = "margin-top:100px;margin-right:40px">
            <h2 id = "">Recent Vacancies</h2>
            <table>
            <tr>
                <th style = "width:250px;border-radius:5px 0px 0px 5px">Job Title</th>
                <th style = "width:150px;border-radius:0px 5px 5px 0px">Job Category</th>
            </tr>
            <?php

                $sql2 = "SELECT * FROM job WHERE cid = $id";
                $result2 = $conn->query($sql2);

                if($result2-> num_rows > 0)
                {   
                    $i=0;
                    while($row = $result2 -> fetch_assoc())
                    {
                        echo '<tr><td>'.$row["job_title"].'</td><td>'.$row["category"].'</td></tr>';
                    if($i == 2)
                    {
                        break;
                    }
                    $i++;
                    }
                    
                }
                else
                {
                    echo "No Records";
                }
                
            ?>


            </table>

            <br>
            <a href="empdashmsg.php" style = "margin-left:0px"><button>See more..</button></a>
            </div>

        </div>

    </div>

</div>

<?php
    include'footer.php';
?>
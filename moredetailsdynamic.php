<?php
    include'header.php';
?>

<?php
    include'config.php';
?>

<?php
    $jvid = $_GET['jid'];
    $sql = "select * from job where job_id = $jvid";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $title = $row['job_title'];
    $category = $row['category'];
    $salary = $row['salary'];
    $description = $row['job_description'];
    $image = $row['image'];
    $code = $row['job_code'];
    $cid = $row['cid'];

    if(isset($_SESSION['id']))
    {
        $sql2 = "SELECT * FROM jsfav WHERE js_id = '$_SESSION[id]' AND job_id = '$jvid'";
        $res2 = mysqli_query($conn , $sql2); 
        $row2 = mysqli_num_rows($res2);
    }

?><!---->
<style>
    input.details{
        width: 1px;
        visibility: hidden;
    }
    .fav
    {
        margin-left: 40px;
    }
    .favadd{
        background-color: #3f4a5d;
        color:white;
        margin-left: -100px;
    }
    .fav{
        margin-left: -100px;
    }

</style>

<div class="mdmaincontainer">
    <div class="mdbanner">
        <?php
        echo '<div class="mdimagecontainer"><img src='.$image.' width="480" height="300"></div>';
        echo '<div class="info"><div class="mdheading"><h2>Vacancy Details</h2></div><br>';
        echo '<div class="mdfeild1"><div class="mdsec1"><p>Job Title:</p></div><div class="mdsec2"><p>'.$title.'</p></div></div>';//$row2.
        echo '<div class="mdfeild1"><div class="mdsec1"><p>Job Category:</p></div><div class="mdsec2"><p>'.$category.'</p></div></div>';//$_SESSION['id'].
        echo '<div class="mdfeild1"><div class="mdsec1"><p>Salery:</p></div><div class="mdsec2"><p>'.$salary.'</p></div></div>';
        echo '<div class="mdfeild2"><div class="mdsec1"><p>Job Description:</p></div><div class="mdsec2"><p>'.$description.'</p></div></div>';
        echo '<div class="mdbuttncontainer">';

        if (isset($_SESSION['id']))
        {
            if($_SESSION['role'] === 'emp' || $_SESSION['role'] === 'admin')
            {
                echo "<a href = 'companyprofile.php?cid=$cid'><button type='button' class='mdapplybttn'>View Company details</button></a>
                <input type = 'text' class = 'details' value = '.$cid.' name = 'cid'></div>";
                //echo '<a href = "jvfavexecute.php"><button type="button" class="mdapplybttn">Add to favourites</button></a>';
                //echo '<a href="applynowdisplay.php"><button type="button" class="mdapplybttn">Apply now</button></a>';
            }
            else
            {
                echo "<a href = 'companyprofile.php?cid=$cid'><button type='button' class='mdapplybttn'>View Company details</button></a>
                <input type = 'text' class = 'details' value = '.$cid.' name = 'cid'>";
                
                if($row2 == 0)
                {
                 echo '<form action = "jvfavexecute.php" method = "POST">
                <input type="submit" target="_blank" class="mdapplybttn fav" value = "Add to favourites">
                <input type = "text" class = "details" value = '.$_SESSION['id'].' name = "jsid">
                <input type = "text" class = "details" value = '.$cid.' name = "cid">
                <input type = "text" class = "details" value = '.$jvid.' name = "jvid">
                </form>';
                }
                else{
                    echo '<input type="submit" target="" class="mdapplybttn favadd" value = "Added to favourites">';
                }


                echo "<a href='applynowexecute.php?jsid=$_SESSION[id]&jvid=$jvid&cid=$cid'><button type='button' class='mdapplybttn'>Apply now</button></a></div>";
                //moredetailsdynamicjvapp.php
            }
        }
        else
        {
            echo '<a href = "loginprompt.php"><button type="button" class="mdapplybttn">View Company details</button></a>';
            echo '<a href = "loginprompt.php"><button type="button" class="mdapplybttn">Add to favourites</button></a>';
            echo '<a href = "loginprompt.php"><button type="button" class="mdapplybttn">Apply now</button></a></div>';
        }


        
        ?>
    </div>
</div>

<?php
    include'footer.php';
?>
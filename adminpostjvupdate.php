<?php
    include'header.php';
    include'adminsession.php';

    $jv_id = $_GET['id'];

    $sql = "SELECT * FROM job WHERE job_id = '$jv_id'";

    $result = $conn->query($sql);

    $row = $result -> fetch_assoc();
    $title = $row['job_title'];
    $cat = $row['category'];
    $sal = $row['salary'];
    $desc = $row['job_description'];
    $image = $row['image'];
?>
<link rel="stylesheet" href="styles/admindash.css">
<style>
    select{
        width: 350px;
        height: 40px;
        border-radius: 20px;
    }
</style>


<div class = "navbaradmin">
    <ul>
        <li>Dashboard</li>
        <li><a href="admindashboard.php"><button>Overview</button></a></li>
        <li><a href="admindashjsacc.php"><button style = "width: 200px;">Job Seeker Accounts</button></a></li>
        <li><a href="admindashempacc.php"><button style = "width: 200px;">Employer Accounts</button></a></li>
        <li><a href="adminpsotjv.php"><button class = "active" style = "width: 210px;">Posted Job Vacancies</button></a></li>
        <li><a href="adminmsg.php"><button>Messages(<?php echo $row5 ?>)</button></a></li>

    </ul>
</div>

<div class = "plate" style = "height:auto;">
        <div class = "container cont1" style = "width:80%;height:650px">
            <!--<img src = "images/123.jpg">-->
            <div class = "box1 boxjv" style = "height:600px">
            <h2>Posted Job Vacancy</h2>
        
            <div class = "cardu cardu1"></div>

            <form action="adminpostjvupdateexecute.php" method="POST" enctype="multipart/form-data" >

            <div class = "cardu cardu2">
        <p>Job Tite : </p>
        <input type="text" name="title" id="" value = "<?php echo $title?>"><br><br>
        
        <p>Job Category : </p>
        <select name="cat">
                <option value="Full Time" <?php if($cat == 'Full Time') echo "Selected"?>>Full time job</option>
                <option value="Part Time" <?php if($cat == 'Part Time') echo "Selected"?>>Part time job</option>
                <option value="Local" <?php if($cat == 'Local') echo "Selected"?>>Local job</option>
                <option value="Foreign" <?php if($cat == 'Foreign') echo "Selected"?>>Foreign job</option>
                <option value="Online" <?php if($cat == 'Online') echo "Selected"?>>Online job</option>
            </select>


        <!--<input type="text" name="cat" id="" value = "">-->
        <br><br>
        <p>Job Description :</p>
    <textarea name="desc" id="" cols="40" rows="40"><?php echo $desc?></textarea><br><br>
    </div>  

    <div class = "cardu cardu3">
         <img src="<?php echo $image ?>" alt="" id = ""><br>
         <input style = "background-color:transparent" type="file" class = "pic" name = "pimage" required><br><br>
         <a href=""><input class = "esdetails" type = "submit" value = "Save Details" name = "submit"></a>
    </div>  

    <form>
    <input type="text" name="jv_id" id="jv_id" value = "<?php echo $jv_id?>" style = "visibility:hidden"><br><br>
        <div class = "space" style="width: 100%; height: 80px;"></div> 
    </div>
    <div style="width: 100%; height: 80px;"></div>
</div>
<div style="width: 100%; height: 80px;"></div>

</div>


<?php
    include'footer.php';
?>
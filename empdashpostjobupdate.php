<?php
    include'header.php';
    include'empsession.php';

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
<link rel="stylesheet" href="styles/empdash.css">

<style>
    textarea
    {
        padding: 10px;
        font-size: 25px;
        border:none;
        color: white;
    }
    select{
        margin-top: 10px;
        width: 450px;
        height: 40px;
        border-radius: 5px;
        margin-left: 28px;
    }
    .plate input,.plate p,textarea{
        margin-top: 20px;
    }
    input.text
    {
        background-color: rgba(255,255,255,0.6);
        border-radius: 0px 5px 5px 0px;
        color: black;
        height: 40px;
        border:none;
        padding:10px;
    }
    input.text:hover
    {
        border-radius: 0px;
        border:none;
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

    <div class = "container" style = "height:650px">  
    <form action="empdashpostjobupdateexecute.php" style="margin-left: 0px;" method="POST" enctype="multipart/form-data" >
        <div class = "favset jvupdate jv1" >
            <br>
           
                <p>Job Title</p>
                <input type="text" name = "title" class = "text" value = "<?php echo $title ?>"><br><br>

                <p>Job Category</p>
                <select name="cat">
                <option value="Full Time" <?php if($cat == 'Full Time') echo "Selected"?>>Full time job</option>
                <option value="Part Time" <?php if($cat == 'Part Time') echo "Selected"?>>Part time job</option>
                <option value="Local" <?php if($cat == 'Local') echo "Selected"?>>Local job</option>
                <option value="Foreign" <?php if($cat == 'Foreign') echo "Selected"?>>Foreign job</option>
                <option value="Online" <?php if($cat == 'Online') echo "Selected"?>>Online job</option>
                </select>

                <p>Job Description</p>
                <textarea name="desc" id="" cols="52" rows="5"><?php echo $desc ?></textarea>
                <br><br>
                <input type="submit" value = "Save Details" class = "subbtn" name = "submit">
           
            <br><br>
        </div>
        <br>
        <div class = "jvupdate jv2"><br>
            <img src="<?php echo $image?>" alt="" id = ""><br>
            <input style = "background-color:transparent;border:none" type="file" class = "pic" name = "pimage"><br><br>
            <p>Salary</p>
            <input type="text" name = "salary" class = "text" value = "<?php echo $sal ?>"><br><br>
            <input type="text" name = "jvid" class = "text" value = "<?php echo $jv_id ?>" style = "visibility:hidden"><br><br>
        </div>
        </form>

        <br><br>
    </div>
    <br><br>

</div>
<?php
    include'footer.php';
?>
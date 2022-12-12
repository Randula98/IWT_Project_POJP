<?php
    include 'config.php';
?>

<?php

    if($_POST['submit'])
    {
        $jv_id = $_POST["jvid"];
        $title = $_POST["title"];
        $cat = $_POST["cat"];
        $salary = $_POST["salary"];
        $desc = $_POST["desc"];
        $image = $_FILES['pimage'];
        $imgname = $_FILES['pimage']['name'];
        $target_dir = 'images/jobpre/';

        $extension = pathinfo($imgname, PATHINFO_EXTENSION);
          $target_file = $target_dir.$jv_id.".".$extension;

        $target_file = $target_dir.$jv_id.".".$extension;
    
        if(isset($_FILES['pimage'])){
            if(move_uploaded_file($_FILES['pimage']['tmp_name'],$target_file)){
                echo 'pass image';
            }else{
                echo 'fail image';
            }
        }else{
            echo 'file upload failed';
        }

        echo '<br>'.$extension;

        if (isset($extension))
        { 
        $sql2 = "UPDATE job SET image = '$target_file' WHERE job_id = '$jv_id'";
        $data2 = mysqli_query($conn , $sql2);
        }

        if($data2)
        {
            echo "nice";
        }
    }

    //echo $jv_id." ".$title." ".$cat." ".$salary." ".$desc;

    $sql = "UPDATE job SET job_title = '$title', category = '$cat', job_description = '$desc' , salary = '$salary' WHERE job_id = '$jv_id'";

    $data = mysqli_query($conn , $sql);

        //echo $js_id;

    if($data)
    {
            header("Location:empdashpostjob.php?status=passed");
    }
    else
    {
            header("Location:empdashpostjob.php?status=failed");
    }

    mysqli_close($conn);
?>
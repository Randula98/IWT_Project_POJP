<?php
    include 'config.php';
?>

<?php
    if($_POST['submit'])
    {
        $jv_id = $_POST['jv_id'];
        $title = $_POST['title'];
        $cat = $_POST['cat'];
        $desc = $_POST['desc'];
        $image = $_FILES['pimage'];
        $imgname = $_FILES['pimage']['name'];
        $target_dir = 'images/jobpre/';

        /*$sql = "UPDATE job SET job_title = '$title', category = '$cat', job_description = '$desc' WHERE job_id = '$jv_id'";

        $data = mysqli_query($conn , $sql);*/

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
    

        //echo $js_id;

        if($data)
        {
            header("Location:adminpsotjv.php?status=passed");
        }
        else
        {
            header("Location:adminpsotjv.php?status=failed");
        }

        echo $title;

    mysqli_close($conn);

    }
?>
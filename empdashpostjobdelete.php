<?php
    include 'config.php';
?>

<?php
    $jv_id = $_GET['id'];

    $sql = "DELETE FROM job WHERE job_id = '$jv_id'";

    $data = mysqli_query($conn , $sql);

    if ($data)
    {
        header("Location:empdashpostjob.php?status=pass");
    }
    else{
        header("Location:empdashpostjob.php?status=fail");
    }

   //echo $jv_id;

    mysqli_close($conn);
?>
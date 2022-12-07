<?php
    include 'config.php';
?>

<?php
    $jv_id = $_GET['id'];

    $sql = "DELETE FROM job WHERE job_id = '$jv_id'";

    $data = mysqli_query($conn , $sql);

    if ($data)
    {
        header("Location:adminpsotjv.php?status=pass");
        //echo $jv_id;
    }
    else{
        header("Location:adminpsotjv.php?status=fail");
    }

   //echo $jv_id;

    mysqli_close($conn);
?>
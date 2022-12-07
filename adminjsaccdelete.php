<?php
    include 'config.php';
?>

<?php
    $js_id = $_GET['id'];

    $sql = "DELETE FROM job_seeker WHERE ID = '$js_id'";

    $data = mysqli_query($conn , $sql);

    if ($data)
    {
        header("Location:admindashjsacc.php?status=pass");
    }
    else{
        header("Location:admindashjsacc.php?status=fail");
    }

    mysqli_close($conn);
?>
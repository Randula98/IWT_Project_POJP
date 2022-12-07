<?php
    include 'config.php';
?>

<?php
    $cmp_id = $_GET['id'];

    $sql = "DELETE FROM employee WHERE ID = '$cmp_id'";

    $data = mysqli_query($conn , $sql);

    if ($data)
    {
        header("Location:admindashempacc.php?status=pass");
    }
    else{
        header("Location:admindashempacc.php?status=fail");
    }

    mysqli_close($conn);
?>
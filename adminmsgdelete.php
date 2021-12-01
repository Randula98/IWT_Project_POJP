<?php
    include 'config.php';
?>

<?php
    $id = $_GET['id'];

    $sql = "DELETE FROM contactus WHERE ID = '$id'";

    $data = mysqli_query($conn , $sql);

    if ($data)
    {
        header("Location:adminmsg.php?status=pass");
    }
    else{
        header("Location:adminmsg.php?status=fail");
    }

    mysqli_close($conn);
?>
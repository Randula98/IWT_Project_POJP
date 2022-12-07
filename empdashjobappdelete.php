<?php
    include'config.php';
?>
<?php
    $japid = $_GET["jid"];

    //echo $jid;

    $sql = "DELETE FROM jsapplication WHERE id = '$japid'";

    $data = mysqli_query($conn , $sql);

    if($data)
    {
        header("Location:empdashjobapp.php?status=passed");
    }
    else
    {
        header("Location:empdashjobapp.php?status=failed");
    }
?>

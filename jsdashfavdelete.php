<?php
    include 'config.php';
?>

<?php
    $id = $_GET['id'];
    
    $sql = "DELETE FROM jsfav WHERE id = '$id'";

    $data = mysqli_query($conn,$sql);

    if ($data)
    {
        header("Location:jsdashfav.php?status=pass");
    }
    else{
        header("Location:jsdashfav.php?status=fail");
    }

    mysqli_close($conn);
?>
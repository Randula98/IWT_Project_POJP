<?php
    $id = $_SESSION['id'];
    $uname = $_SESSION['uname'];
    $pass = $_SESSION['password'];
    $_SESSION['role'] = 'admin';

    if (isset($_SESSION['id']))
    {

    }
    else{
        header("Location:index.php");
    }

    $sql5 = "SELECT * FROM contactus";
    $res5 = mysqli_query($conn , $sql5);
    $row5 = mysqli_num_rows($res5);
?>
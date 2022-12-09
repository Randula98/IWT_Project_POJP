<?php
    include_once'config.php';
?>

<?php
    $username = $_POST['lg1username'];
    $password = $_POST['lg1password'];

    $username = stripslashes($username);
    $password = stripslashes($password);

    $sql = mysqli_query($conn , "SELECT * FROM admin WHERE username = '$username' AND password = '$password'");

    //$sql = "SELECT * FROM comp WHERE username = '$username' AND password = '$password'";

    //$result = $conn->query($sql);

    $row  = mysqli_fetch_array($sql);

    if ($password == $row['password'])
    {
        session_start();
        $_SESSION['id'] = $row['ID'];
        $_SESSION['uname'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['role'] = 'admin';
        header("Location:admindashboard.php"); 
    }
    else{
        header("Location:adminlogin.php?failed");
    }

    $conn -> close();

?>
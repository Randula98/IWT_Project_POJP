<?php
    $id = $_SESSION['id'];
    /*$uname = $_SESSION['uname'];
    $pass = $_SESSION['password'];*/
    $_SESSION['role'] = 'emp';

    if (isset($_SESSION['id']))
    {
        $sql = "SELECT * FROM employee WHERE ID = '$id'";
        
        $result = $conn->query($sql);

        $row = $result->fetch_assoc();
        $location = $row['Location'];
        $cname = $row['CompanyName'];
        $cdesc = $row['CompanyDescription'];
        $pcno = $row['PrimaryContact'];
        $pnu = $row['PhoneNumber'];
        $email = $row['Email'];
        $password = $row['password'];
        $website = $row['Website'];
        $aline1 = $row['Street1'];
        $aline2 = $row['Street2'];
        $city = $row['City'];
        $province = $row['Province'];
        $pzcode = $row['PostalZipcode'];
        $cdetails = $row['CompanyDetails'];
        $image = $row['company_logo'];
    }
    else{
        header("Location:index.php");
    }
?>
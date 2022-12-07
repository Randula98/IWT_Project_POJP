<?php
    $id = $_SESSION['id'];
    /*$uname = $_SESSION['uname'];
    $pass = $_SESSION['password'];*/
    $_SESSION['role'] = 'js';

    if (isset($_SESSION['id']))
    {
        $sql = "SELECT * FROM job_seeker WHERE ID = '$id'";

        $result = $conn->query($sql);
    
        $row = $result -> fetch_assoc();
        $fname = $row['Fullname'];
        $dob = $row['DateOFBirth'];
        $gdate = $row['GraduateDate'];
        $pcno = $row['PrimaryContact'];
        $pnu = $row['PhoneNumber'];
        $email = $row['Email'];
        $aline1 = $row['Street1'];
        $aline2 = $row['Street2'];
        $city = $row['City'];
        $province = $row['Province'];
        $pzcode = $row['PostalZipcode'];
        $passno = $row['PassportNumber'];
        $doi = $row['DateofIssue'];
        $vupto = $row['ValidUPTO'];
        $password = $row['password'];
        $image = $row['profilepic'];

        $query = "SELECT * FROM academic WHERE JID = '$id'";

        $qresult = $conn->query($query);

        $arow = $qresult->fetch_assoc();
        $hq1 = $arow['HQ1'];
        $hq2 = $arow['HQ2'];
        $hq3 = $arow['HQ3'];
        $pg1 = $arow['PG1'];
        $pg2 = $arow['PG2'];
        $pg3 = $arow['PG3'];
        $ed1 = $arow['ED1'];
        $ed2 = $arow['ED2'];
        $ed3 = $arow['ED3'];
        $aoq1 = $arow['AOQ1'];
        $aoq2 = $arow['AOQ2'];
        $aoq3 = $arow['AOQ3'];
        $wed1 = $arow['WED1'];
        $wed2 = $arow['WED2'];
        $wed3 = $arow['WED3'];
        $d1 = $arow['D1'];
        $d2 = $arow['D2'];
        $d3 = $arow['D3'];
        $acs1 = $arow["jsreg3feild1"];
        $acs2 = $arow["jsreg3feild2"];
        $acs3 = $arow["jsreg3feild3"];
    }
    else{
        header("Location:index.php");
    }
?>
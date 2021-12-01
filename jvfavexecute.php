<?php 
    include 'config.php';
    //include 'jssession.php';
?>

<?php
    $jvid = $_POST['jvid'];
    $cid = $_POST['cid'];
    $jsid = $_POST['jsid'];

    $sql1 = "SELECT * FROM employee WHERE ID = '$cid'";
    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();
    $comp_name = $row1['CompanyName'];

    $sql2 = "SELECT * FROM job WHERE job_id = '$jvid'";
    $result2 = $conn->query($sql2);
    $row2 = $result2->fetch_assoc();
    $jv_title = $row2['job_title'];

    $sql3 = "INSERT INTO jsfav (job_id , job_title , comp_id , comp_name , js_id) VALUES ('$jvid' , '$jv_title' , '$cid' , '$comp_name' , '$jsid')";
    
    //$sql = "INSERT INTO job_seeker (Email , password) VALUES ('$email' , '$password')";
    
    //echo $jvid."<br>".$jv_title."<br>".$cid."<br>".$comp_name."<br>".$jsid;

    if(mysqli_query($conn , $sql3)){
        //header("Refresh:0?status=passed");
        header("Location:moredetailsdynamic.php?jid=$jvid");
        //echo "pass";
    }
    else{
        //header("Refresh:0?status=failed");
        echo "Fail";
    }


    //echo "<script>window.close();</script>";
    //header("Refresh:0");
?>
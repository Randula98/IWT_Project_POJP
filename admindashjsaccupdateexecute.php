<?php
    include 'config.php';
?>

<?php

    if($_POST['submit'])
    {
        $js_id = $_POST['jsid'];
        $fname = $_POST['fname'];
        $dob = $_POST['dob'];
        $gdate = $_POST['gdate'];
        $pcno = $_POST['pcno'];
        $pnu = $_POST['pnu'];
        $email = $_POST['email'];
        //$website = $_GET['website'];
        $aline1 = $_POST['aline1'];
        $aline2 = $_POST['aline2'];
        $city = $_POST['city'];
        $province = $_POST['province'];
        $pzcode = $_POST['pzcode'];
        $passno = $_POST['passno'];
        $doi = $_POST['doi'];
        $vupto = $_POST['vupto'];

    
        $img = $_FILES['pimage'];
        $imgname = $_FILES['pimage']['name'];

        echo $fname.'<br>';
        /*$image = $_FILES['pimage'];
        $imgname =  $_FILES['pimage']['tmp_name'];
        $extension = pathinfo($imgname,PATHINFO_EXTENSION);
        $target_dir = 'images/jsprofile/';*/

        $extension = pathinfo($imgname,PATHINFO_EXTENSION);
        $target_dir = 'images/jsprofile/';

        $target_file = $target_dir.$js_id.".".$extension;
    
        if(isset($_FILES['pimage'])){
            if(move_uploaded_file($_FILES['pimage']['tmp_name'],$target_file)){
                echo 'pass image';
            }else{
                echo 'fail image';
            }
        }else{
            echo 'file upload failed';
        }


        if(isset($img))
        {
            echo "hello";
            echo $target_file;
        }

        //echo $vupto;


        if(!isset($extension))
        {
            $sql2 = "UPDATE job_seeker SET profilepic = '$target_file'  WHERE ID = '$js_id'";

        $data2 = mysqli_query($conn , $sql2);

        if($data2)
        {
            echo "ela";
        }
        }

    }

    

   $sql = "UPDATE job_seeker SET Fullname = '$fname', DateOFbirth = '$dob', GraduateDate = '$gdate', PrimaryContact = '$pcno',
            PhoneNumber = '$pnu',Email = '$email', Street1 = '$aline1', Street2 = '$aline2', City = '$city', Province = '$province',
            PostalZipcode = '$pzcode', PassportNumber = '$passno', DateofIssue = '$doi', ValidUPTO = '$vupto' WHERE ID = '$js_id'";

    //
    //
    //

    $data = mysqli_query($conn , $sql);

    //echo $js_id;

    if($data)
    {
        header("Location:admindashjsacc.php?status=passed");
    }
    else
    {
        header("Location:admindashjsacc.php?status=failed");
    }
    

    mysqli_close($conn);
   
?>
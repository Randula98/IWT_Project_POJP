<?php
    include 'config.php';
?>

<?php

    if($_POST['submit'])
    {
        $cmp_id = $_POST['cmpid'];
        $loc = $_POST['loc'];
        $cname = $_POST['cname'];
        $cdesc = $_POST['cdesc'];
        $pcno = $_POST['pcno'];
        $pnu = $_POST['pnu'];
        $email = $_POST['email'];
        $website = $_POST['website'];
        $aline1 = $_POST['aline1'];
        $aline2 = $_POST['aline2'];
        $city = $_POST['city'];
        $province = $_POST['province'];
        $pzcode = $_POST['pzcode'];
        $cdetails = $_POST['cdetails'];

        $img = $_FILES['pimage'];
        $imgname = $_FILES['pimage']['name'];

        $extension = pathinfo($imgname,PATHINFO_EXTENSION);
        $target_dir = 'images/complogo/';

        $target_file = $target_dir.$cmp_id.".".$extension;
    
        if(isset($_FILES['pimage'])){
            if(move_uploaded_file($_FILES['pimage']['tmp_name'],$target_file)){
                echo 'pass image';
            }else{
                echo 'fail image';
            }
        }else{
            echo 'file upload failed';
        }

        /*$sql2 = "UPDATE employee SET ";


        if(isset($img))
        {
            echo $target_file;
        }*/
    }

    $sql = "UPDATE employee SET Location = '$loc', CompanyName = '$cname', CompanyDescription = '$cdesc', PrimaryContact = '$pcno',
            PhoneNumber = '$pnu', Email = '$email', Website = '$website', Street1 = '$aline1', Street2 = '$aline2',
            City = '$city', Province = '$province', PostalZipcode = '$pzcode', CompanyDetails = '$cdetails' WHERE ID = '$cmp_id'";
   
   $data = mysqli_query($conn , $sql);

    //echo $js_id;

    if($data)
    {
        header("Location:admindashempacc.php?status=passed");
    }
    else
    {
        header("Location:admindashempacc.php?status=failed");
    }

    

    mysqli_close($conn);
?>
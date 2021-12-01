<?php
    include'config.php';
?>

<?php
 if($_POST['submit'])
 {
     $cmp_id = $_POST['id'];
     $loc = $_POST['location'];
     $cname = $_POST['cname'];
     $cdesc = $_POST['cdesc'];
     $pcno = $_POST['pcno'];
     $pnu = $_POST['pnu'];
     $email = $_POST['email'];
     $website = $_POST['website'];
     $password = $_POST['password'];
     $aline1 = $_POST['aline1'];
     $aline2 = $_POST['aline2'];
     $city = $_POST['city'];
     $province = $_POST['province'];
     $pzcode = $_POST['pzcode'];
    // $cdetails = $_GET['cdetails'];

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
 }

 $sql = "UPDATE employee SET Location = '$loc', CompanyName = '$cname', CompanyDescription = '$cdesc', PrimaryContact = '$pcno',
         PhoneNumber = '$pnu', Email = '$email',password = '$password' , Website = '$website', Street1 = '$aline1', Street2 = '$aline2',
         City = '$city', Province = '$province', PostalZipcode = '$pzcode' WHERE ID = '$cmp_id'";

$data = mysqli_query($conn , $sql);

 //echo $js_id;

 if($data)
 {
    header("Location:empdashprofile.php?status=passed");
     //echo "Hello";
 }
 else
 {
     header("Location:empdashedit.php?status=failed");
    //echo "failed";
}

 mysqli_close($conn);

?>


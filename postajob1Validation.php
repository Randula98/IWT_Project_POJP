<?php
    include_once 'config.php';
?>

<?php

    $title = $_POST['field1'];
    $category = $_POST['field2'];
    $salary = $_POST['field3'];
    $description = $_POST['field4'];
    $image = $_FILES['field5'];
    $imgname = $_FILES['field5']['name'];
    $img_dir = 'images/'.$imgname;
 
$sql = "insert into postajob1 (job_id,job_title,category,salary,job_description,image) values('', '$title', '$category', '$salary', '$description', '$img_dir')";

if (mysqli_query($conn , $sql)){

    header("Location:postajob1.php?status=pass");
}
else
{
    echo "Error!!";
}

//close the connection
mysqli_close($conn);

?>
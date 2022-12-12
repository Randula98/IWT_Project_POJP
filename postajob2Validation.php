<?php
    include_once 'config.php';
?>

<?php

    $nameC = $_POST['cardname'];
    $numberC = $_POST['cardno'];

    $sql = "insert into postajob2 (Payment_id,Name_on_card,Card_number) values('', '$nameC', '$numberC')";

    if (mysqli_query($conn , $sql)){

        header("Location:postajob2.php?status=pass");
    }
    else
    {
        echo "Error!";
    }
    
    mysqli_close($conn);
    
    ?>


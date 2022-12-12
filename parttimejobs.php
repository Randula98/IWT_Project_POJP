<?php
include 'header.php';
?>

<?php
    include'config.php';
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styles/parttimejobs.css">
	<title>Part time jobs</title>
    <br> <br> <br> <br> <br> <br> <br> <br>
</head>

<body>
     <div class="container0">
        <div class="heading">
            <br>
            <p id="topic1">Part Time Jobs</p>
            <br> <br> <br>
        </div>
        <div class="container1">
            <div class="container2">
                    
                <ul class="box1">

            <! 1st row>   
                    <li>
                        <img id="banner" src="./images/parttime/ad12.jpg" alt="" >

                            <div class="caption_container">
                                <div class="effect_banner"><!/div>
                                <div class="slide_up_banner">

                                <?php
                                    $sql = "select * from parttimejobs where job_code = 'pj1'";
                                    $result = $conn->query($sql);

                                    if($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            echo "<a href='moredetails.php?id=$row[job_id]&titlei=$row[job_title]&categoryi=$row[category]&salaryi=$row[salary]&descriptioni=$row[job_description]&imagei=$row[image]&codei=$row[job_code]'><p id='more'>See more</p></a>";
                                        }
                                    }
                                    else {
                                        echo "Not Available";
                                    }
                                ?>
                                    
                                </div>
                            </div>

                           
                    </li>

                    <li>
                        <img  id="banner" src="./images/parttime/ad5.jpg" alt="" height="250px"  width= "300px">
                            <div class="caption_container">
                                <div class="effect_banner"></div>
                                <div class="slide_up_banner">

                                <?php
                                    $sql = "select * from parttimejobs where job_code = 'pj2'";
                                    $result = $conn->query($sql);

                                    if($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            echo "<a href='moredetails.php?id=$row[job_id]&titlei=$row[job_title]&categoryi=$row[category]&salaryi=$row[salary]&descriptioni=$row[job_description]&imagei=$row[image]&codei=$row[job_code]'><p id='more'>See more</p></a>";
                                        }
                                    }
                                    else {
                                        echo "Not Available";
                                    }
                                ?>                                
                                </div>
                            </div>
                    </li>

            <! 2nd row>
                    <li>
                        <img src="./images/parttime/ad9.jpg" alt="" height="250px"  width= "300px">
                            <div class="caption_container">
                                <div class="effect"></div>
                                <div class="slide_up">

                                <?php
                                    $sql = "select * from parttimejobs where job_code = 'pj3'";
                                    $result = $conn->query($sql);

                                    if($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            echo "<a href='moredetails.php?id=$row[job_id]&titlei=$row[job_title]&categoryi=$row[category]&salaryi=$row[salary]&descriptioni=$row[job_description]&imagei=$row[image]&codei=$row[job_code]'><p id='more'>See more</p></a>";
                                        }
                                    }
                                    else {
                                        echo "Not Available";
                                    }
                                ?>                                
                                </div>
                            </div>
                     </li>

                    <li>
                        <img src="./images/parttime/p1.jpg" alt="" height="250px"  width= "300px">
                            <div class="caption_container">
                                <div class="effect"></div>
                                <div class="slide_up">
                                 
                                <?php
                                    $sql = "select * from parttimejobs where job_code = 'pj4'";
                                    $result = $conn->query($sql);

                                    if($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            echo "<a href='moredetails.php?id=$row[job_id]&titlei=$row[job_title]&categoryi=$row[category]&salaryi=$row[salary]&descriptioni=$row[job_description]&imagei=$row[image]&codei=$row[job_code]'><p id='more'>See more</p></a>";
                                        }
                                    }
                                    else {
                                        echo "Not Available";
                                    }
                                ?>                                
                                
                                </div>
                            </div>
                    </li>

                    <li>
                        <img src="./images/parttime/f5.jpg" alt="" height="250px"  width= "300px">
                            <div class="caption_container">
                                <div class="effect"></div>
                                <div class="slide_up">

                                <?php
                                    $sql = "select * from parttimejobs where job_code = 'pj5'";
                                    $result = $conn->query($sql);

                                    if($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            echo "<a href='moredetails.php?id=$row[job_id]&titlei=$row[job_title]&categoryi=$row[category]&salaryi=$row[salary]&descriptioni=$row[job_description]&imagei=$row[image]&codei=$row[job_code]'><p id='more'>See more</p></a>";
                                        }
                                    }
                                    else {
                                        echo "Not Available";
                                    }
                                ?>                                
                                </div>
                            </div>
                    </li>

            <! 3rd row>
                    <li>
                        <img id="rectangle" src="./images/parttime/ad10.jpg" alt="" height="250px"  width= "300px">
                            <div class="caption_container2">
                                <div class="effect_rectangle"></div>
                                <div class="slide_up_rectangle">

                                <?php
                                    $sql = "select * from parttimejobs where job_code = 'pj6'";
                                    $result = $conn->query($sql);

                                    if($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            echo "<a href='moredetails.php?id=$row[job_id]&titlei=$row[job_title]&categoryi=$row[category]&salaryi=$row[salary]&descriptioni=$row[job_description]&imagei=$row[image]&codei=$row[job_code]'><p id='more'>See more</p></a>";
                                        }
                                    }
                                    else {
                                        echo "Not Available";
                                    }
                                ?>                                
                                
                                </div>
                            </div>
                    </li>

                    <li>
                        <img id="square" src="./images/parttime/ad4.jpg" alt="" height="250px"  width= "300px">
                            <div class="caption_container2">
                                <div class="effect_square"></div>
                                <div class="slide_up_square">

                                <?php
                                    $sql = "select * from parttimejobs where job_code = 'pj7'";
                                    $result = $conn->query($sql);

                                    if($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            echo "<a href='moredetails.php?id=$row[job_id]&titlei=$row[job_title]&categoryi=$row[category]&salaryi=$row[salary]&descriptioni=$row[job_description]&imagei=$row[image]&codei=$row[job_code]'><p id='more'>See more</p></a>";
                                        }
                                    }
                                    else {
                                        echo "Not Available";
                                    }
                                ?>                                
                                
                                </div>
                            </div>
                    </li>

                    <li>
                        <img id="rectangle" src="./images/parttime/ad7.jpg" alt="" height="250px"  width= "300px">
                            <div class="caption_container2">
                                <div class="effect_rectangle"></div>
                                <div class="slide_up_rectangle">

                                <?php
                                    $sql = "select * from parttimejobs where job_code = 'pj8'";
                                    $result = $conn->query($sql);

                                    if($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            echo "<a href='moredetails.php?id=$row[job_id]&titlei=$row[job_title]&categoryi=$row[category]&salaryi=$row[salary]&descriptioni=$row[job_description]&imagei=$row[image]&codei=$row[job_code]'><p id='more'>See more</p></a>";
                                        }
                                    }
                                    else {
                                        echo "Not Available";
                                    }
                                ?>                                
                                
                                </div>
                            </div>
                    </li>

        <! 4th row>
                    <li>
                        <img id="banner" src="./images/parttime/ad1.jpg" alt="" >
                            <div class="caption_container">
                                <div class="effect_banner"></div>
                                <div class="slide_up_banner">

                                <?php
                                    $sql = "select * from parttimejobs where job_code = 'pj9'";
                                    $result = $conn->query($sql);

                                    if($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            echo "<a href='moredetails.php?id=$row[job_id]&titlei=$row[job_title]&categoryi=$row[category]&salaryi=$row[salary]&descriptioni=$row[job_description]&imagei=$row[image]&codei=$row[job_code]'><p id='more'>See more</p></a>";
                                        }
                                    }
                                    else {
                                        echo "Not Available";
                                    }
                                ?>                                    
                                   
                                </div>
                            </div>
                    </li>

                    <li>
                        <img  id="banner" src="./images/parttime/ad14.jpg" alt="" height="250px"  width= "300px">
                            <div class="caption_container">
                                <div class="effect_banner"></div>
                                <div class="slide_up_banner">

                                <?php
                                    $sql = "select * from parttimejobs where job_code = 'pj10'";
                                    $result = $conn->query($sql);

                                    if($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            echo "<a href='moredetails.php?id=$row[job_id]&titlei=$row[job_title]&categoryi=$row[category]&salaryi=$row[salary]&descriptioni=$row[job_description]&imagei=$row[image]&codei=$row[job_code]'><p id='more'>See more</p></a>";
                                        }
                                    }
                                    else {
                                        echo "Not Available";
                                    }
                                ?>                                
                                
                                </div>
                            </div>
                    </li>
                </ul>   
            </div>

            <br> <br>
        </div>
     </div>
       

    </body>
    </html>

<?php
include 'footer.php';
?>
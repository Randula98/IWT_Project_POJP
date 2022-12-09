<?php
    include'header.php';
?>
<div class="ljmaincontainer">
<div id="titlecontainer1">
    <h1>Local Jobs</h1>
</div>

<div id="jobcontainer1">
    <div id="cell">
        <img id="" src="images/jobs/ad1.jpg">
        <div id="info">
        <?php
            $sql = "select * from job where job_id = 21";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo "<a href='moredetailsdynamic.php?jid=$row[job_id]' id='applybttn'><p>More Details</p></a>";
            }
            }else{
                echo "Not Available";
            }
        ?>
        </div>
    </div>
    <div id="cell">
        <img id="" src="images/jobs/ad2.jpg">
        <div id="info">
        <?php
            $sql = "select * from job where job_id = 22";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo "<a href='moredetailsdynamic.php?jid=$row[job_id]' id='applybttn'><p>More Details</p></a>";
            }
            }else{
                echo "Not Available";
            }
        ?>
        </div>
    </div>
    <div id="cell">
        <img id="" src="images/jobs/ad3.jpg">
        <div id="info">
        <?php
            $sql = "select * from job where job_id = 23";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo "<a href='moredetailsdynamic.php?jid=$row[job_id]' id='applybttn'><p>More Details</p></a>";
            }
            }else{
                echo "Not Available";
            }
        ?>
        </div>
    </div>
    <div id="cell">
        <img id="" src="images/jobs/ad4.jpg">
        <div id="info">
        <?php
            $sql = "select * from job where job_id = 24";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo "<a href='moredetailsdynamic.php?jid=$row[job_id]' id='applybttn'><p>More Details</p></a>";
            }
            }else{
                echo "Not Available";
            }
        ?>
        </div>
    </div>
</div>

<div id="jobcontainer2">
<?php
  $sql = "select * from job where job_id = 25";
  $result = $conn->query($sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><button id='applybttn2' type='button'>More Details</button></a>";
  }
  }else{
    echo "Not Available";
  }
?>
    <img id="" src="images/jobs/ad5.jpg">
</div>

<div id="jobcontainer3">
<?php
  $sql = "select * from job where job_id = 26";
  $result = $conn->query($sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><button id='applybttn3' type='button'>More Details</button></a>";
  }
  }else{
    echo "Not Available";
  }
?>
    <img id="" src="images/jobs/ad6.jpg">
</div>

<div id="titlecontainer2">
    <h1>Top 5 Vacancies in Demand</h1>
</div>

<div id="jobcontainer4">
    <div id="c4j1">
    <?php
  $sql = "select * from job where job_id = 27";
  $result = $conn->query($sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><div id='hoverlayer'><h3>Data Entry <br>Operators</h3><p>Work at HomeIT HOLDIND Rs 45,000 - 85,000 Colombo , Data Entry Operator</p></div></a>";
  }
  }else{
    echo "Not Available";
  }
?>

        <img id="" src="images/jobs/ad7.jpg">
    </div>
    <div id="c4j2">
    <?php
        $sql = "select * from job where job_id = 28";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><div id='hoverlayer'><h3>Graphic Designer</h3><p>Graphic Designers (Male)Privet Company Rs 20,000 - 30,000 Colombo , Designer</p></div></a>";
        }
        }else{
            echo "Not Available";
        }
    ?>
        <img id="" src="images/jobs/ad8.jpg">
    </div>
    <div id="c4j3">
    <?php
        $sql = "select * from job where job_id = 29";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><div id='hoverlayer'><h3>Sales Assistant</h3><p>Sales Assistant (Male)D-BLAQ Rs 22,000 - 32,000 Colombo , Sales Executive</p></div></a>";
        }
        }else{
            echo "Not Available";
        }
    ?>

        <img id="" src="images/jobs/ad9.jpg">
    </div>
    <div id="c4j4">
    <?php
        $sql = "select * from job where job_id = 30";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><div id='hoverlayer'><h3>Web Designers</h3><p>Web Designers (Male)Privet Company Rs 20,000 - 30,000 Colombo , Designer</p></div></a>";
        }
        }else{
            echo "Not Available";
        }
    ?>

        <img id="" src="images/jobs/ad10.jpg">
    </div>
    <div id="c4j5">
    <?php
        $sql = "select * from job where job_id = 31";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><div id='hoverlayer'><h3>Marketing Executive</h3><p>Marketing executive and assistant sales manager - BadullaCeylinco VIP Badulla , Marketing Executive</p></div></a>";
        }
        }else{
            echo "Not Available";
        }
    ?>
        <img id="" src="images/jobs/ad11.jpg">
    </div>
</div>

<div class="ojseqsection">
<div class="ojseqmiddlesec">
  
<?php
  $sql = "select * from job where job_id > 59  AND category = 'Local'";

  $result = $conn->query($sql);
  
  if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
      echo "<div class='ojcard'><img id='ojcardimg' src='images/logo.png'><p class='ojcardsate'>We're hiring</p>";
      echo "<p class='ojcardtitle'>".$row['job_title']."</p>";
      echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><button class='ojcardmorebttn' type='button'>More Details</button></a></div>";
    }
    
  }
?>
  </div>
</div>
</div>
<?php
    include'footer.php';
?>

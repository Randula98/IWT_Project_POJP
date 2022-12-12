<?php
    include'header.php';
?>
<div class="fjmaincontainer">
<div id="titlecontainer1fj">
  <h1>Foreign Jobs</h1>
</div>

<div id="slider">
  <img id="" src="images/jobs/ad16.jpg">
</div>
</div>
<div id="section2">
  <div id="jobcontainerfj">
    <div id="job1fj">
    <?php
  $sql = "select * from job where job_id = 34";
  $result = $conn->query($sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><img id='sec2img' src='images/jobs/ad12.jpg'></a>";
  }
  }else{
    echo "Not Available";
  }
?>
    </div>
    <div id="job2fj">
    <?php
  $sql = "select * from job where job_id = 35";
  $result = $conn->query($sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><img id='sec2img' src='images/jobs/ad13.jpg'></a>";
  }
  }else{
    echo "Not Available";
  }
?>
    </div>
    <div id="job3fj">
    <?php
  $sql = "select * from job where job_id = 32";
  $result = $conn->query($sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><img id='sec2img' src='images/jobs/ad14.jpg'></a>";
  }
  }else{
    echo "Not Available";
  }
?>
    </div>
  </div>
</div>

<div id="jobbanner">
<?php
  $sql = "select * from job where job_id = 33";
  $result = $conn->query($sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><button id='applybttn4' type='button'>More Details</button></a>";
  }
  }else{
    echo "Not Available";
  }
?>
  <img id="" src="images/jobs/ad15.jpg">
</div>

<div class="ojseqsection">
<div class="ojseqmiddlesec">
  
<?php
  $sql = "select * from job where job_id > 59  AND category = 'Foreign'";

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


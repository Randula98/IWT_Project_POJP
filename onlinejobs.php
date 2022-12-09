<?php
    include'header.php';
?>
<div class="ojmaincontainer">
<div id="titlecontainer1">
  <h1>Online Jobs</h1>
</div>

<div id="jobcontaineroj">
  <div id="r1">
    <div id="r1c1">
      <div id="r1c1r1">
        <div id="r1c1r1c1">
          <div id="r1c1r1c1r1">
            <div id="inner">
              <div id="front">
                <img src="images/jobs/oj1.jpg">
              </div>
              <div id="backoj">
                <img id="logoback" src="images/logo.png">
                  <?php
                    $sql = "select * from job where job_id = 1";
                    $result = $conn->query($sql);

                    /*if($result->num_rows > 0){
                      while($row = $result->fetch_assoc()){
                        echo "<a href='moredetails.php?id=$row[job_id]&titlei=$row[job_title]&categoryi=$row[category]&salaryi=$row[salary]&descriptioni=$row[job_description]&imagei=$row[image]&codei=$row[job_code]'><p>Click here<br>for more details</p></a>";
                      }
                      }else{
                        echo "Not Available";
                    }*/

                    if($result->num_rows > 0){
                      while($row = $result->fetch_assoc()){
                        echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><p>Click here<br>for more details</p></a>";
                      }
                      }else{
                        echo "Not Available";
                    }
                  ?>
              </div>
            </div>
          </div>
          <div id="r1c1r1c1r2">
            <div id="inner">
              <div id="front">
                <img src="images/jobs/oj5.jpg">
              </div>
              <div id="backoj">
                <img id="logoback" src="images/logo.png">
                <?php
                    $sql = "select * from job where job_id = 6";

                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                      while($row = $result->fetch_assoc()){
                        echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><p>Click here<br>for more details</p></a>";
                      }
                      }else{
                        echo "Not Available";
                    }
                  ?>
              </div>
            </div>
          </div>
        </div>
        <div id="r1c1r1c2">
          <div id="r1c1r1c2r1">
            <div id="inner">
              <div id="front">
                <img src="images/jobs/oj2.jpg">
              </div>
              <div id="backoj">
                <img id="logoback" src="images/logo.png">
                <?php
                    $sql = "select * from job where job_id = 3";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                      while($row = $result->fetch_assoc()){
                        echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><p>Click here<br>for more details</p></a>";
                      }
                      }else{
                        echo "Not Available";
                    }
                  ?>
              </div>
            </div>
          </div>
          <div id="r1c1r1c2r2">
            <div id="inner">
              <div id="front">
                <img src="images/jobs/oj6.jpg">
              </div>
              <div id="backoj">
                <img id="logoback" src="images/logo.png">
                <?php
                    $sql = "select * from job where job_id = 7";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                      while($row = $result->fetch_assoc()){
                        echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><p>Click here<br>for more details</p></a>";
                      }
                      }else{
                        echo "Not Available";
                    }
                  ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="r1c1r2">
        <div id="r1c1r2c1">
          <div id="inner">
            <div id="front">
              <img src="images/jobs/oj9.jpg">
            </div>
            <div id="backoj">
              <img id="logoback" src="images/logo.png">
              <?php
                    $sql = "select * from job where job_id = 10";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                      while($row = $result->fetch_assoc()){
                        echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><p>Click here<br>for more details</p></a>";
                      }
                      }else{
                        echo "Not Available";
                    }
                  ?>
            </div>
          </div>
        </div>
        <div id="r1c1r2c2">
          <div id="inner">
            <div id="front">
              <img src="images/jobs/oj10.jpg">
            </div>
            <div id="backoj">
              <img id="logoback" src="images/logo.png">
              <?php
                    $sql = "select * from job where job_id = 11";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                      while($row = $result->fetch_assoc()){
                        echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><p>Click here<br>for more details</p></a>";
                      }
                      }else{
                        echo "Not Available";
                    }
                ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="r1c2">
      <div id="r1c2r1">
        <div id="r1c2r1c1">
          <div id="inner">
            <div id="front">
              <img src="images/jobs/oj3.jpg">
            </div>
            <div id="backoj">
              <img id="logoback" src="images/logo.png">
              <?php
                    $sql = "select * from job where job_id = 4";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                      while($row = $result->fetch_assoc()){
                        echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><p>Click here<br>for more details</p></a>";
                      }
                      }else{
                        echo "Not Available";
                    }
                  ?>
            </div>
          </div>
        </div>
        <div id="r1c2r1c2">
          <div id="inner">
            <div id="front">
              <img src="images/jobs/oj4.jpg">
            </div>
            <div id="backoj">
              <img id="logoback" src="images/logo.png">
              <?php
                    $sql = "select * from job where job_id = 5";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                      while($row = $result->fetch_assoc()){
                        echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><p>Click here<br>for more details</p></a>";
                      }
                      }else{
                        echo "Not Available";
                    }
                  ?>
            </div>
          </div>
        </div>
      </div>
      <div id="r1c2r2">
        <div id="r1c2r2c1">
          <div id="inner">
            <div id="front">
              <img src="images/jobs/oj7.jpg">
            </div>
            <div id="backoj">
              <img id="logoback" src="images/logo.png">
              <?php
                    $sql = "select * from job where job_id = 8";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                      while($row = $result->fetch_assoc()){
                        echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><p>Click here<br>for more details</p></a>";
                      }
                      }else{
                        echo "Not Available";
                    }
                  ?>
            </div>
          </div>
        </div>
        <div id="r1c2r2c2">
          <div id="inner">
            <div id="front">
              <img src="images/jobs/oj8.jpg">
            </div>
            <div id="backoj">
              <img id="logoback" src="images/logo.png">
              <?php
                    $sql = "select * from job where job_id = 9";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                      while($row = $result->fetch_assoc()){
                        echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><p>Click here<br>for more details</p></a>";
                      }
                      }else{
                        echo "Not Available";
                    }
                  ?>
            </div>
          </div>
        </div>
      </div>
      <div id="r1c2r3">
        <div id="r1c2r3c1">
          <div id="inner">
            <div id="front">
              <img src="images/jobs/oj11.jpg">
            </div>
            <div id="backoj">
                <img id="logoback" src="images/logo.png">
            <?php
                    $sql = "select * from job where job_id = 12";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                      while($row = $result->fetch_assoc()){
                        echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><p>Click here<br>for more details</p></a>";
                      }
                      }else{
                        echo "Not Available";
                    }
                  ?>
            </div>
          </div>
        </div>
        <div id="r1c2r3c2">
          <div id="inner">
            <div id="front">
              <img src="images/jobs/oj12.jpg">
            </div>
            <div id="backoj">
              <img id="logoback" src="images/logo.png">
              <?php
                    $sql = "select * from job where job_id = 13";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                      while($row = $result->fetch_assoc()){
                        echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><p>Click here<br>for more details</p></a>";
                      }
                      }else{
                        echo "Not Available";
                    }
                  ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="r2">
    <div id="r2c1">
      <div id="r2c1r1">
        <div id="inner">
          <div id="front">
            <img src="images/jobs/oj13.jpg">
          </div>
          <div id="backoj">
            <img id="logoback" src="images/logo.png">
            <?php
                    $sql = "select * from job where job_id = 14";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                      while($row = $result->fetch_assoc()){
                        echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><p>Click here<br>for more details</p></a>";
                      }
                      }else{
                        echo "Not Available";
                    }
                  ?>
          </div>
        </div>
      </div>
      <div id="r2c1r2">
        <div id="r2c1r2c1">
          <div id="inner">
            <div id="front">
              <img src="images/jobs/oj16.jpg">
            </div>
            <div id="backoj">
              <img id="logoback" src="images/logo.png">
              <?php
                    $sql = "select * from job where job_id = 17";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                      while($row = $result->fetch_assoc()){
                        echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><p>Click here<br>for more details</p></a>";
                      }
                      }else{
                        echo "Not Available";
                    }
                  ?>
            </div>
          </div>
        </div>
        <div id="r2c1r2c2">
          <div id="inner">
            <div id="front">
              <img src="images/jobs/oj17.jpg">
            </div>
            <div id="backoj">
              <img id="logoback" src="images/logo.png">
              <?php
                    $sql = "select * from job where job_id = 18";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                      while($row = $result->fetch_assoc()){
                        echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><p>Click here<br>for more details</p></a>";
                      }
                      }else{
                        echo "Not Available";
                    }
                  ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="r2c2">
      <div id="r2c2c1">
        <div id="r2c2c1r1">
          <div id="inner">
            <div id="front">
              <img src="images/jobs/oj14.jpg">
            </div>
            <div id="backoj">
              <img id="logoback" src="images/logo.png">
              <?php
                    $sql = "select * from job where job_id = 15";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                      while($row = $result->fetch_assoc()){
                        echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><p>Click here<br>for more details</p></a>";
                      }
                      }else{
                        echo "Not Available";
                    }
                  ?>
            </div>
          </div>
        </div>
        <div id="r2c2c1r2">
          <div id="inner">
            <div id="front">
              <img src="images/jobs/oj18.jpg">
            </div>
            <div id="backoj">
              <img id="logoback" src="images/logo.png">
              <?php
                    $sql = "select * from job where job_id = 19";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                      while($row = $result->fetch_assoc()){
                        echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><p>Click here<br>for more details</p></a>";
                      }
                      }else{
                        echo "Not Available";
                    }
                  ?>
            </div>
          </div>
        </div>
      </div>
      <div id="r2c2c2">
        <div id="r2c2c2r1">
          <div id="inner">
            <div id="front">
              <img src="images/jobs/oj15.jpg">
            </div>
            <div id="backoj">
              <img id="logoback" src="images/logo.png">
              <?php
                    $sql = "select * from job where job_id = 16";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                      while($row = $result->fetch_assoc()){
                        echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><p>Click here<br>for more details</p></a>";
                      }
                      }else{
                        echo "Not Available";
                    }
                  ?>
            </div>
          </div>
        </div>
        <div id="r2c2c2r2">
          <div id="inner">
            <div id="front">
              <img src="images/jobs/oj19.jpg">
            </div>
            <div id="backoj">
              <img id="logoback" src="images/logo.png">
              <?php
                    $sql = "select * from job where job_id = 20";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                      while($row = $result->fetch_assoc()){
                        echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><p>Click here<br>for more details</p></a>";
                      }
                      }else{
                        echo "Not Available";
                    }
                  ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="ojseqsection">
<div class="ojseqmiddlesec">
  
<?php
  $sql = "select * from job where job_id > 59  AND category = 'Online'";

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
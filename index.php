<?php 
include 'header_main.php';
?>

<div id="section2">
    <div id="sec2Container">
      <h2>Explore by Category</h2>
      <ul>
        <a href="trendingjobs.php"><li><img id="caticon" src="images/c1.png"><p>Trending Jobs</p></li></a>
        <a href="parttimejobs.php"><li><img id="caticon" src="images/c2.png"><p>Part Time</p></li></a>
        <a href="fulltimejobs.php"><li><img id="caticon" src="images/c3.png"><p>Full Time</p></li></a>
        <a href="localjobs.php"><li><img id="caticon" src="images/c4.png"><p>Local Jobs</p></li></a>
        <a href="foreignjobs.php"><li><img id="caticon" src="images/c5.png"><p>Foreign Jobs</p></li></a>
        <a href="onlinejobs.php"><li><img id="caticon" src="images/c6.png"><p>Online Jobs</p></li></a>
        </ul>
    </div>


  </div>

  <div id="section3">
    <div id="sec3container">
      <div id="sec3p1">
        <p>Make a Difference with your Online Resume</p>
      </div>
      <div id="sec3p2">
        <p>Your resume in minutes with Payrow resume assistant is ready</p>
      </div>

        <?php
          if(isset($_SESSION['id']))
          {

          }
          else{
            echo '<a href="sign.php"><button type="button" id="resumebttn" onclick="">Create an Account</button></a>';
          }
        ?>
      
    </div>
  </div>

  <div id="section4">
    <div id="sec4imgcontainer">
      <img id="#" src="images/post1.jpg">
    </div>

    <div id="sec4textcontainer">
      <h3>Get applications from the worlds best talents.</h3>

      <div id="sec4para">Capitalize on low hanging friut to identify a ballpark value added activity to beta test. 
        Override the digital divide with additional clickthroughs from DevOps.
      </div>
        <!---->
        <?php
          if(isset($_SESSION['id']))
          {
            if($_SESSION['role'] === 'emp')
            {
              echo '<a href="postajob1.php"><button type="button" id="postbttn" onclick="">Post a Job</button></a>';
            }
            else if (($_SESSION['role'] === 'admin') || ($_SESSION['role'] === 'js')){}
            else
            {
              echo '<a href="destroy.php"><button type="button" id="postbttn" onclick="">Post a Job</button></a>';
            }
          }
          else{
              echo '<a href="cmlogin.php"><button type="button" id="postbttn" onclick="">Post a Job</button></a>';
          }
        ?>
      

      <!---->
    </div>
  </div>
<!--
  <div id="section5">
    <h2>Get hired in top Companies</h2>
    <div id="companylogos">
      <a href="#" title="Chanel"><img src="images/comanylogos/chanel.png"></a>
      <a href="#" title="Cocacola"><img src="images/comanylogos/cocacola.png"></a>
      <a href="#" title="Converse"><img src="images/comanylogos/converse.png"></a>
      <a href="#" title="Target"><img src="images/comanylogos/target.png"></a>
      <a href="#" title="Vans"><img src="images/comanylogos/vans.png"></a>
      <a href="#" title="Adidas"><img src="images/comanylogos/adidas.png"></a>
      <a href="#" title="Netflix"><img src="images/comanylogos/netflix.png"></a>
    </div>
  </div>-->

  <?php
    include 'footer.php'
  ?>
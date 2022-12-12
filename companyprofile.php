<?php
include 'header.php';
include 'config.php';
?>

<?php
    $comp_id = $_GET["cid"];

    $sql3 = "SELECT * FROM employee WHERE ID = '$comp_id'";
    

    $result3 = $conn->query($sql3);

    $row3 = $result3->fetch_assoc();
    $location = $row3['Location'];
    $cname = $row3['CompanyName'];
    $cdesc = $row3['CompanyDescription'];
    $pcno = $row3['PrimaryContact'];
    $pnu = $row3['PhoneNumber'];
    $email = $row3['Email'];
    $website = $row3['Website'];
    $aline1 = $row3['Street1'];
    $aline2 = $row3['Street2'];
    $city = $row3['City'];
    $province = $row3['Province'];
    $pzcode = $row3['PostalZipcode'];
    $cdetails = $row3['CompanyDetails'];
    $image = $row3['company_logo'];
?>


<div class="companyProfileBody" style="background-image: url('images/abishek_images/profilepages/comp/bg.jpg');">

    <div class="comapanyAbout">

        <div class="companyLogo">
            <img src="<?php echo $image ?>" alt="companyLogo">
        </div>

        <div class="compName">
            
                 <?php echo '<h1>'.$cname.'</h1>'?>
            
            <div class="compborder"></div>
        </div>

        <div class="comAbouttab2">
            <div class="compDes">
                <h2>
                    Company Description :
                </h2>
                    <?php echo '<p>'.$cdesc.'</p>'?>                
            </div>

            <div class="contactDetails">
                <div class="compDet">
                    <img src="images/abishek_images/profilepages/comp/callicon.png" alt="callicon">
                    <?php echo '<h3>'.$pcno.'</h3>'?>
                </div>
                <div class="compDet">
                    <img src="images/abishek_images/profilepages/comp/webicon.png" alt="webicon">
                    <?php echo '<h3>'.$email.'</h3>'?>
                </div>
                <div class="compDet">
                    <img src="images/abishek_images/profilepages/comp/emailicon.png" alt="emailicon">
                    <?php echo '<h3>'.$email.'</h3>'?>
                </div>
            </div>

            <div class="compLocation">
                <div class="compAddress1">
                    <h3><?php echo $aline1 ?></h3>
                </div>
                <div class="compAddress2">
                    <h3><?php echo $aline2 ?></h3>
                </div>
                <div class="compCity">
                    <h3><?php echo $city ?></h3>
                </div>
                <div class="compProvince">
                    <h3><?php echo $province ?></h3>
                </div>
                <div class="compZip">
                    <h3><?php echo $pzcode ?></h3>
                </div>
                <div class="compCountry">
                    <h3><?php echo $location ?></h3>
                </div>



            </div>


        </div>

        <div class="compTextArea">
            <textarea name="CompMSG" id="compTextArea" placeholder="Sent a message"></textarea>
            <input type="submit" class="compTextAreaSubmit" value="Send Message">
        </div>

        <!--<div class="compbackbtn">
            <a href="#" class="compBackbtnA"> Back </a>
        </div>-->


    </div>



















</div>

<?php
include 'footer.php';
?>
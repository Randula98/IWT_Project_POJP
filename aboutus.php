<?php
include 'header.php';
?>

<!DOCTYPE html>
<html>

<head>
	<title>About us</title>

    <link rel="stylesheet" href="styles/aboutus.css">
    

    <br> <br> <br> <br> <br> 

</head>

<body>

    <div class="banner">

        <div class="slide">
            <div class="numbertext">1 / 3</div>
            <img src="./images/aboutus/banner13.4.jpg" style="width:100%"  height="490px">
            
        </div>

        <div class="slide">
            <div class="numbertext">2 / 3</div>
            <img src="./images/aboutus/banner7.2.jpg" style="width:100%" height="490px">
            
        </div>

        <div class="slide">
            <div class="numbertext">3 / 3</div>
            <img src="./images/aboutus/banner15.3.jpg" style="width:100%" height="490px">
          
        </div>
        

        <a class="back" onclick="increment(-1)">&#10094;</a>
        <a class="next" onclick="increment(1)">&#10095;</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="current(1)"></span>
        <span class="dot" onclick="current(2)"></span>
        <span class="dot" onclick="current(3)"></span>
    </div>

    <script src="js/aboutus.js"></script>


    <!--heading-->
    <br>
    <center>
        <p class = "topic"> Our Team Members</p>
        
    </center>
    <br> <br>

    <!--avatars-->

    <table class="table1">

        <tr>
            <td class="td1">
                <img src="./images/aboutus/avatar4.png" alt="avt1" class="avatar">
                <center>
                <br>
                    <h2>Randula Mawaththa</h2>
                </center>

            </td>

            <td class="td1">

                <img src="./images/aboutus/avatar6.png" alt="avt2" class="avatar">
                <center>
                <br>
                    <h2>Sahan Perera</h2>
                </center>

                </div>


            </td>

            <td class="td1">

                <img src="./images/aboutus/avatar7.png" alt="avt3" class="avatar">
                <center>
                <br>
                    <h2>Abishek perera</h2>
                </center>



            </td>
        </tr>
    </table>

    <table class="table2">

        <tr>

            <td class="td2">

                <img src="./images/aboutus/avatar8.png" alt="avt1" class="avatar">
                <center>
                <br>
                    <h2>Mishara Jayathilake</h2>
                </center>

            </td>

            <td class="td2">

                <img src="./images/aboutus/avatar5.png" alt="avt1" class="avatar">
                <center>
                    <br>
                    <h2>Janani Mayadunna</h2>
                </center>

            </td>

    </table>

    <br> <br> <br> <br> <br>


    
    
    <!--map and description-->
    <table>
        <td style="padding-left: 20px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126743.58585987407!2d79.78616461334089!3d6.92200394581088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!5e0!3m2!1sen!2slk!4v1632995484026!5m2!1sen!2slk" width="800" height="450" style="border:0; border-radius:5px;" allowfullscreen="" loading="lazy"></iframe>
			</td>
		<td style="padding: 50px;"></td>	
        <td class="just">
            <div class="box">
                <p class="description">Payrow is a company located in Colombo. We started our journey in 2016 and successfully thrived till today. </p>
                <br>
                <p class="description">For the excellent customer satisfaction of Payrow we have been awarded with "Best online service provider" award for 2 years in a row. This proves the trustworthiness of Payrow as a job portal.</p>
                <br>
            </div>

		</td>
		<td style="padding: 50px;"></td>
    </table>
    <br>
</body>

</html>


<?php
include 'footer.php';
?>
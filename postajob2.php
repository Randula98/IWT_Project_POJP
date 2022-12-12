<?php
include 'header.php';
?>

<?php
    include_once'config.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Post a job</title>
        <link rel="stylesheet" href="styles/postajob.css">

        <br> <br> <br> <br> <br> <br> <br> <br>
    </head>

    <body>
        <center>
            <br>
            <p id = "topic">Post a Job</p>
        </center>
            

        <br><br>

        <div id="button_set">

            <button class = "button1"> <a style="color:black;" href ="postajob1.php">Step 1</a> </button>
            <button class = "button1"> <a style="color:black;" href ="#">Step 2</a> </button>
        </div>

        <br> <br>

        <div class="message">
            <p id="topic2">Advertisement fee for your job vacancy is $14.99.<br>Please enter your payment details below.</p> 
        </div>

        <br> <br>

        <div class="beforeForm">
        <form action="postajob2Validation.php" method="POST">

            <p class="t2"> Payment details </p>

            <br>
			
            Accepted Cards  <br> <br>
            <img src="./images/postajob/pay3.png" height="50px" width="300px">

            <br> <br>
			
			
            Name on Card : <br> <br>
            <input type="text" name="cardname" placeholder="Hisoka Morrow">
			
            <br> <br>

            Credit card number : <br> <br>
            <input type="text" name="cardno" placeholder="xxxx-xxxx-xxxx-xxxx">
			
            <br> <br>

            Expiration Month : <br> <br>
            <input type="text" name="expmonth" placeholder="March">
			
            <br> <br>
			
            Expiration Year : <br> <br>
            <input type="text" name="expyear" placeholder="2025">
				
            <br> <br>
			  
            CVV : <br> <br>
            <input type="text" name="cvv" placeholder="412">
			
            <br> <br> <br> <br>
       
            <center>
            <input type="submit" value="Confirm payment" class="next_button">
            </center>

      </form>

            <br>
        </div>

    </body>
</html>



<?php
include 'footer.php';
?>
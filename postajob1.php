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
        <link rel="stylesheet" href="styles/postajob.css" />

        <br> <br> <br> <br> <br> <br> <br> <br>
    </head>

    <body>
        <center>
            <br>
            <p id = "topic">Post a Job</p>
           
        </center>

        <br> <br>

        <div id="button_set">

            <button class = "button1"> <a style="color:black;" href ="#">Step 1</a> </button>
            <button class = "button1"> <a style="color:black;" href ="#">Step 2</a> </button>

        </div>

        <br> <br>
        
        <div class="beforeForm">

        <form action= "postajob1Validation.php"  method="POST" enctype="multipart/form-data">

            <p class="t2">Job details form </p>

            <br>

            Job Title : <br><br>
            <input type="text" name="field1" placeholder="Enter job title here" required> <br><br><br>

            Category : <br><br>
            <select name="field2">
                <option value="Full Time">Full time job</option>
                <option value="Part Time">Part time job</option>
                <option value="Local Jobs">Local job</option>
                <option value="Foreign Jobs">Foreign job</option>
                <option value="Online Jobs">Online job</option>
            </select>

            <br> <br>

            Salary ($) : <br> <br>
            <input type="text" name="field3" placeholder="Enter salary in US dollars" required> <br><br><br>

            <br>

            Job description : <br><br>
            <textarea name="field4" rows="5" cols="60" required></textarea> <br> <br><br>
            
            Add images : <br><br>
            <input type="file" id="myFile" name="field5">

            <br> <br><br>
            
            <center>
            <input type="submit" class="next_button" value=" Next "> <br><br>
            </center>


        </form>
        

        </div>
    </body>
</html>



<?php
include 'footer.php';
?>
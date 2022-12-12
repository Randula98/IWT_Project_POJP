<?php 
    include 'config.php';
?>

<?php

    if($_GET['submit'])
    {
        $jid = $_GET['id'];
        $HQ1 = $_GET['HighestQualification1'];
        $HQ2 = $_GET['HighestQualification2'];
        $HQ3 = $_GET['HighestQualification3'];
        $PG1 = $_GET['PostGraduate1'];
        $PG2 = $_GET['PostGraduate2'];
        $PG3 = $_GET['PostGraduate3'];
        $ED1 = $_GET['EquivalentDiploma1'];
        $ED2 = $_GET['EquivalentDiploma2'];
        $ED3 = $_GET['EquivalentDiploma3'];
        $AOQ1 = $_GET['AnyotherQualification1'];
        $AOQ2 = $_GET['AnyotherQualification2'];
        $AOQ3 = $_GET['AnyotherQualification3'];
        $WED1 = $_GET['WorkExperienceDetails1'];
        $WED2 = $_GET['WorkExperienceDetails2'];
        $WED3 = $_GET['WorkExperienceDetails3'];
        $D1 = $_GET['Declaration1'];
        $D2 = $_GET['Declaration2'];
        $D3 = $_GET['Declaration3'];
        $ACS1 = $_GET['acs1'];
        $ACS2 = $_GET['acs2'];
        $ACS3 = $_GET['acs3'];
    }
    

    $sql = "UPDATE academic SET HQ1 = '$HQ1', HQ2 = '$HQ2', HQ3 = '$HQ3', PG1 = '$PG1', PG2 = '$PG2', PG3 = '$PG3', ED1 = '$ED1',
            ED2 = '$ED2', ED3 = '$ED3', AOQ1 = '$AOQ1', AOQ2 = '$AOQ2', AOQ3 = '$AOQ3', WED1 = '$WED1', WED2 = '$WED2', WED3 = '$WED3',
            D1 = '$D1' , D2 = '$D2' , D3 = '$D3', jsreg3feild1 = '$ACS1', jsreg3feild2 = '$ACS2' , jsreg3feild3 = '$ACS3' WHERE JID = '$jid' ";

if (mysqli_query($conn , $sql)){

    header("Location:jsdashprofep.php?status=pass");
    //echo "<script>alert('Record Inserted Successfully!!')</script>";

}
else
{
    header("Location:jsdashprofad.php?status=error");
}


//close the connection
?>
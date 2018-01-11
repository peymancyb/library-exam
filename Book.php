<?php
$sName = 'localhost';
$uName = 'root';
$pWord = '';
$dbName = 'Library';

$getConnected = new mysqli($sName,$uName,$pWord,$dbName);
if(!$getConnected){
    echo "Connection failed: ". $getConnected->connection_error;
}

if(isset($_POST['BookN']) and $_POST['BookN'] != '')
    $BookN = $_POST["BookN"];
if(isset($_POST['Publisher']) and $_POST['Publisher'] != '')
    $Publisher = $_POST["Publisher"];
if(isset($_POST['PageC']) and $_POST['PageC'] != '')
    $PageC = $_POST["PageC"];
if(isset($_POST['PublishD']) and $_POST['PublishD'] != '')
    $PublishD = $_POST['PublishD'];
if(isset($_POST['IDD']) and $_POST['IDD'] != '')
    $IDD = $_POST["IDD"];

$selectEligible = "INSERT INTO BOOKS(BookName,Publisher,PageCount,PublishData,ID)VALUES ('$BookN','$Publisher','$PageC','$PublishD','$IDD')";
// functionallity
if (mysqli_query($getConnected, $selectEligible)) {
        echo "<p style='text-align:center;'>". "Book has been added successfully" . "</p>";
}else{
    echo "no results";
}

$getConnected -> close();

?>

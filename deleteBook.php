<?php
$sName = 'localhost';
$uName = 'root';
$pWord = '';
$dbName = 'Library';

$getConnected = new mysqli($sName,$uName,$pWord,$dbName);
if(!$getConnected){
    echo "Connection failed: ". $getConnected->connection_error;
}

if(isset($_POST['BookNN']) and $_POST['BookNN'] != '')
    $BookN = $_POST["BookNN"];
if(isset($_POST['PublisherR']) and $_POST['PublisherR'] != '')
    $Publisher = $_POST["PublisherR"];
if(isset($_POST['PageCC']) and $_POST['PageCC'] != '')
    $PageC = $_POST["PageCC"];
if(isset($_POST['PublishDD']) and $_POST['PublishDD'] != '')
    $PublishD = $_POST['PublishDD'];
if(isset($_POST['IDT']) and $_POST['IDT'] != '')
    $IDD = $_POST["IDT"];

$selectEligible = "DELETE FROM BOOKS WHERE BookName = '$BookN' && Publisher = '$Publisher' && PageCount = $PageC && PublishData = $PublishD && ID = $IDD ";
// functionallity
if (mysqli_query($getConnected, $selectEligible)) {
        echo "<p style='text-align:center;'>". "Book has been DELETED successfully" . "</p>";
}else{
    echo "no results";
}

$getConnected -> close();

?>

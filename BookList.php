<?php
$sName = 'localhost';
$uName = 'root';
$pWord = '';
$dbName = 'Library';

$getConnected = new mysqli($sName,$uName,$pWord,$dbName);
if(!$getConnected){
    echo "Connection failed: ". $getConnected->connection_error;
}

$selectEligible = "SELECT * FROM BOOKS";
$search_resualt = $getConnected->query($selectEligible);
// functionallity
if($search_resualt->num_rows > 0 ){
        while($row = $search_resualt->fetch_assoc()){
             echo "<table style='width:900px;'><tr>"
             ."<td>"."Title of book: ".$row['BookName']."</td><td>"
             ."Author: ".$row['Publisher']."</td><td>"
             ."Number of pages: ".$row["PageCount"]."</td><td>"
             ."Publish date: ".$row["PublishData"]."</td><td>"
             ."ID: ".$row["ID"]."</td><td>"
             ."</td></tr></table>";
        }
    }
else{
    echo "no results";
}
$getConnected -> close();

?>

<?php
$reviewerName1 = $_POST["info_reviewername1"]; 
$reviewerName2 = $_POST["info_reviewername2"];
$reviewerMessage1 = $_POST["info_reviewerMessage1"];
$reviewerMessage2 = $_POST["info_reviewerMessage2"];
$copyRightNotice = $_POST["info_copyright"];

/* $servername = "localhost";
$username = "root";
$password = "";
$dbname = "honeybobadb";
 */
 
$servername = "localhost";
$username = "id17964301_jwong";
$password = "*x*~yM#rQ{v73MWN";
$dbname = "id17964301_honeybobadb";

 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql1 = "UPDATE content SET info='$reviewerName1' WHERE ID=3";

if ($conn->query($sql1) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$sql2 = "UPDATE content SET info='$reviewerMessage1' WHERE ID=5";

if ($conn->query($sql2) === TRUE) {
  
} else {
  echo "Error updating record: " . $conn->error;
}

$sql3 = "UPDATE content SET info='$reviewerName2' WHERE ID=4";

if ($conn->query($sql3) === TRUE) {
 
} else {
  echo "Error updating record: " . $conn->error;
}

$sql4 = "UPDATE content SET info='$reviewerMessage2' WHERE ID=6";

if ($conn->query($sql4) === TRUE) {
  
} else {
  echo "Error updating record: " . $conn->error;
}

$sql5 = "UPDATE content SET info='$copyRightNotice' WHERE ID=12";

if ($conn->query($sql5) === TRUE) {
  
} else {
  echo "Error updating record: " . $conn->error;
}



$conn->close();
?>

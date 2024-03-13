<?php
$reviewerName = $_POST["pName"]; 
$mytextarea = $_POST['mytextarea'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "honeybobadb";

 
/* $servername = "localhost";
$username = "id17964301_jwong";
$password = "*x*~yM#rQ{v73MWN";
$dbname = "id17964301_honeybobadb"; */

 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


#$sql1 = "INSERT INTO `feedbacktable`(`Message`) VALUES ('$mytextarea')";
$sql1 = "INSERT INTO `feedbacktable`(`Name`, `Message`) VALUES ('$reviewerName','$mytextarea')";


if ($conn->query($sql1) === TRUE) {
  echo "Feed Back Recorded!";
} else {
  echo "Error updating record: " . $conn->error;
}

  
  
?>

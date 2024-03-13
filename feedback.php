<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "honeybobadb";

/* $servername = "localhost";
$username = "id17964301_jwong";
$password = "*x*~yM#rQ{v73MWN";
$dbname = "id17964301_honeybobadb";
 */

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


//SQL query for webpage title
$sql_title= "SELECT ID, info FROM content where ID= '1'";
$result_title = $conn->query($sql_title);   
	
	$row_title = $result_title->fetch_assoc();
	$title=$row_title["info"];
	
//SQL query for webpage feedBackName1 
$sql_feedBackName1 = "SELECT ID, info FROM content where ID= '3'";
$result_feedBackName1  = $conn->query($sql_feedBackName1);   
	
	$row_feedBackName1 = $result_feedBackName1->fetch_assoc();
	$feedBackName1=$row_feedBackName1["info"];	

//SQL query for webpage feedBackName2 
$sql_feedBackName2 = "SELECT ID, info FROM content where ID= '4'";
$result_feedBackName2  = $conn->query($sql_feedBackName2);   
	
	$row_feedBackName2 = $result_feedBackName2->fetch_assoc();
	$feedBackName2=$row_feedBackName2["info"];	

//SQL query for webpage feedBack1Message 
$sql_feedBack1Message = "SELECT ID, info FROM content where ID= '5'";
$result_feedBack1Message  = $conn->query($sql_feedBack1Message);   
	
	$row_feedBack1Message = $result_feedBack1Message->fetch_assoc();
	$feedBack1Message=$row_feedBack1Message["info"];	

//SQL query for webpage feedBack2Message 
$sql_feedBack2Message = "SELECT ID, info FROM content where ID= '6'";
$result_feedBack2Message  = $conn->query($sql_feedBack2Message);   
	
	$row_feedBack2Message = $result_feedBack2Message->fetch_assoc();
	$feedBack2Message=$row_feedBack2Message["info"];

//SQL query for webpage copyRightText 
$sql_copyRightText = "SELECT ID, info FROM content where ID= '12'";
$result_copyRightText = $conn->query($sql_copyRightText);   
	
	$row_copyRightText = $result_copyRightText->fetch_assoc();
	$copyRightText=$row_copyRightText["info"];	

//SQL query for webpage eMailButtonText
$sql_eMailButtonText= "SELECT ID, info FROM content where ID= '2'";
$result_eMailButtonText = $conn->query($sql_eMailButtonText);   
	
	$row_eMailButtonText = $result_eMailButtonText->fetch_assoc();
	$eMailButtonText=$row_eMailButtonText["info"];
	
//SQL query for webpage homeButtonText 
$sql_homeButtonText = "SELECT ID, info FROM content where ID= '7'";
$result_homeButtonText  = $conn->query($sql_homeButtonText);   
	
	$row_homeButtonText = $result_homeButtonText->fetch_assoc();
	$homeButtonText=$row_homeButtonText["info"];	

//SQL query for webpage productGalleyButtonText 
$sql_productGalleyButtonText = "SELECT ID, info FROM content where ID= '8'";
$result_productGalleyButtonText  = $conn->query($sql_productGalleyButtonText);   
	
	$row_productGalleyButtonText = $result_productGalleyButtonText->fetch_assoc();
	$productGalleyButtonText=$row_productGalleyButtonText["info"];		

//SQL query for webpage aboutUsButtonText 
$sql_aboutUsButtonText = "SELECT ID, info FROM content where ID= '9'";
$result_aboutUsButtonText  = $conn->query($sql_aboutUsButtonText);   
	
	$row_aboutUsButtonText = $result_aboutUsButtonText->fetch_assoc();
	$aboutUsButtonText=$row_aboutUsButtonText["info"];

//SQL query for webpage contactUsButtonText 
$sql_contactUsButtonText = "SELECT ID, info FROM content where ID= '10'";
$result_contactUsButtonText  = $conn->query($sql_contactUsButtonText);   
	
	$row_contactUsButtonText = $result_contactUsButtonText->fetch_assoc();
	$contactUsButtonText=$row_contactUsButtonText["info"];

//SQL query for webpage storelocationButtonText 
$sql_storelocationButtonText = "SELECT ID, info FROM content where ID= '11'";
$result_storelocationButtonText = $conn->query($sql_storelocationButtonText);   
	
	$row_storelocationButtonText = $result_storelocationButtonText->fetch_assoc();
	$storelocationButtonText=$row_storelocationButtonText["info"];		
		
//SQL query for webpage feedbackButtonText 
$sql_feedbackButtonText  = "SELECT ID, info FROM content where ID= '13'";
$result_feedbackButtonText  = $conn->query($sql_feedbackButtonText);   
	
	$row_feedbackButtonText  = $result_feedbackButtonText ->fetch_assoc();
	$feedbackButtonText =$row_feedbackButtonText["info"];		
			
			

?>

<html>
<head>
	<title> <?php echo "$title";?> </title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
	<div class=h4>
	 <p font-color: white;> HONEY BOBA</p>
		
	</div>
		
	<div class=dashboard>
		<br>
		<center><h1>FEED BACK SECTION</h1>
		<form method="POST" action="addprocess.php" >
	
		<tr>
			<td><label><b>Name</label></td>
			<td><input type=text id=pName name=pName size=20></td>
		</tr>
		<br>
		<br>
		<tr>
			<td><label><b>Feedback</label></td>
			<br>
			
		</tr>
		
		<tr>
		<td align =center><textarea name="mytextarea" rows="20" cols="100"></textarea>
		</tr>
		</tr>
		<br>
		<br>
		<tr>
		<td align =center><input type=submit value=submit></form></td>
		</tr>
		

   
 
		
		</center>	
		</div>
		
		
		
		<div class=footer>
		<br/>
		<hr>
		<br/>
		
		<button><a href="index.php" title="Home"><?php echo "$homeButtonText"; ?></a></button>&nbsp;&nbsp;
			<button><a href="ProductGalleryPage1.php" title="Products"><?php echo "$productGalleyButtonText"; ?></a></button>&nbsp;&nbsp;
			<button><a href ="About_Us.html" title="Website Information" ><?php echo "$aboutUsButtonText"; ?></a></button>&nbsp;&nbsp;
			<button><a href ="Contact_Us.html"  title="Contact Informations" ><?php echo "$contactUsButtonText"; ?></a></button>&nbsp;&nbsp;
			<button><a href ="Store_Location.html"  title="Location" ><?php echo "$storelocationButtonText"; ?></a></button>&nbsp;&nbsp;
			<button><a href ="feedback.php"  title="feedback" ><?php echo "$feedbackButtonText"; ?></a></button>&nbsp;&nbsp;
			
			
		
		
		<center><p font = 'arial'><?php echo "$copyRightText"; ?></p></center>
		<hr>
		
	</div>
		
		
		
	</div>

</html>

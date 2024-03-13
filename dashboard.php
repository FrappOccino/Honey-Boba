<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "honeybobadb";

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
		<center><h1>ADMIN DASHBOARD</h1>
		<form method="post" action="update.php" >
	
		<tr>
			<td><label><b>Reviewer Name</label></td>
			<td><input type=text id=info_reviewername1 name=info_reviewername1 value="<?php echo "$feedBackName1"; ?>" size=20></td>
		</tr>
		<br>
		<br>
		<tr>
			<td><label><b>Reviewer Message</label></td>
			<br>
			<td><input type=text id=info_reviewerMessage1 name=info_reviewerMessage1 value="<?php echo "$feedBack1Message"; ?>" size=100></td>
		</tr>
		
		<br>
		<br>
		<tr>
			<td><label>Reviewer Name</label></td>
			<td><input type=text id=info_reviewername2 name=info_reviewername2 value="<?php echo "$feedBackName2"; ?>"  size=20></td>
		</tr>
		<br>
		<br>
		<tr>
			<td><label>Reviewer Message</label></td>
			<br>
			<td><input type=text id=info_reviewerMessage2 name=info_reviewerMessage2 value="<?php echo "$feedBack2Message"; ?>" size=100></td>
		</tr>
		<br>
		<br>
		<tr>
			<td><label>Copyright Notice</label></td>
			<br>
			<td><input type=text id=info_copyright name=info_copyright value="<?php echo "$copyRightText"; ?>"  size=50></td>
		</tr>
		
		<br>
		<br>
		<tr>
		<td align =center><input type=submit value=UPDATE> <input type=reset value=CLEAR></td>
		</tr>
		</center>	
	</div>
		
		<div class=footer>
		
		
		
	</div>

</html>

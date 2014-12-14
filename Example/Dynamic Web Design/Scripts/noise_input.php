
<?php
date_default_timezone_set('Europe/Stockholm'); //or change to whatever timezone you want

$error_1=$error_2=''; // Variable To Store Error Message
$reply='';
$noiselevel=$lat=$lon=$id=$time='';

if (isset($_POST['noiseinputsubmit'])) {	
	if (empty($_POST['noiselevelinput'])) {
		$error_1 = "Please enter a vaild num !!";
	}
	else if (empty($_POST['local-lat']) || empty($_POST['local-lon'])) {
		$error_2 = "Please locate an address !!";
	}	
	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	$connection = new mysqli("127.0.0.1:3306", "root", "root");
	
	// Selecting Database
	$connection->select_db("noisedatalist");
	
	// Value Assigned
	$noiselevel = $_POST['noiselevelinput'];
	$lat = $_POST['local-lat'];
	$lon = $_POST['local-lon'];
	$id = $login_session;
	$time = date('Y-m-d');

	$sql_insert = "INSERT INTO noisedata (NoiseLevel, LocationLat, LocationLon, UserID, RecordTime)
	 VALUES ($noiselevel, $lat, $lon, (SELECT UserName from usersdata WHERE UserName='$id'), '$time')";
	
	if ($connection->query($sql_insert) === TRUE) {
    	$reply = "New record created successfully !!";
	} else {
    	$reply = ("Error: " . $sql_insert . "<br>" . $connection->error . " !!");
	}		
	$connection->close();
} 
?>

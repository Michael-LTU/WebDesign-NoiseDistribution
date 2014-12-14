
<?php
date_default_timezone_set('Europe/Stockholm'); //or change to whatever timezone you want

$errorMessage=''; // Variable To Store Error Message
$sum = $count = $average = 0;
$time = $date = $noise = array(); // Array To Store Date Element of Every Elected Record

if (isset($_POST['start-analysis'])){	
	// Initialize and Define variable 
	if (empty($_POST['lat-analysis']) || empty($_POST['lon-analysis'])) {
		$errorMessage = "location failure";	
		header("location: ../HTML5-Public/map.php");
	}	
	else {
		$lat_x=$_POST["lat-analysis"];
		$lon_y=$_POST["lon-analysis"];
	}
	
	$servername = "127.0.0.1:3306";
	$username = "root";
	$password = "root";
	$dbname = "noisedatalist";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Selection
	$sql_analysis = "SELECT * FROM noisedata";
	$result_analysis = $conn->query($sql_analysis);
	$lines_analysis = $result_analysis;
	
	if ($lines_analysis->num_rows > 0) {
		 while($row_analysis = $result_analysis->fetch_assoc()) {
			if ($row_analysis["LocationLat"] < $lat_x && ($lat_x - 0.1) < $row_analysis["LocationLat"]) 
			{
				if( $row_analysis["LocationLon"] < $lon_y && ($lon_y - 0.1) < $row_analysis["LocationLon"])				
				{
					$sum += $row_analysis["NoiseLevel"];
					$time[$count] = $row_analysis["RecordTime"]; // For Graphic usage
					$noise[$count] = $row_analysis["NoiseLevel"]; // For Graphic usage
					$count++;			
				}			
			}
		}
		
		if ($count != 0) {
			$average = $sum / $count; 
		}
		else {
			//echo "There are " + $result_analysis->num_rows + "records in total. ";
			//echo "Sorry, no related record was found !";
		}
		for($x = 0; $x < count($time); $x++) {
			
			$date_format = new DateTime($time[$x]);		
			
			$date[$x] = $date_format->format('d');
		}
	}
	$conn->close();
}
?>
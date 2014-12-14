<!-- Cannot load local variable of subpage(../HTML5-Public/Index.php#openModal)-->
<?php
date_default_timezone_set('Europe/Stockholm'); //or change to whatever timezone you want
$reg_error=''; // Variable To Store Error Message

if (isset($_POST['register_new'])) 
{
$reg_username=$_POST['name'];
$reg_password=$_POST['password'];
$reg_email=$_POST['email'];
$reg_customername=$_POST['username'];

$reg_day = $_POST['BirthDay'];  
$reg_month = $_POST['BirthMonth'];  
$reg_year = $_POST['BirthYear']; 
$reg_birthday = date("Y-m-d", mktime(0,0,0,$reg_month, $reg_day, $reg_year)); 

$reg_mobilephone=$_POST['phone'];

$servername = "127.0.0.1:3306";
$username = "root";
$password = "root";
$dbname = "noisedatalist";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Insert data into database
	$sql_insert = "INSERT INTO usersdata (UserName, Password, Email, CustomerName, Birthday, MobilePhone)
 VALUES ('$reg_username', '$reg_password', '$reg_email', '$reg_customername', '$reg_birthday', '$reg_mobilephone')";

	if ($conn->query($sql_insert) === TRUE) {
		$reg_error = "New record created successfully !!";
	} else {
		$reg_error = "Error: " . $sql_insert . "<br>";
	}

$conn->close();
}
?>

<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
	if (empty($_POST['net-id']) || empty($_POST['password'])) {
		$error = "Please do not leave NetID or Password blank !!";
	}
	else
	{
		// Define $username and $password
		$username=$_POST['net-id'];
		$password=$_POST['password'];
		
		// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		$connection = new mysqli("127.0.0.1:3306", "root", "root");
		
		// To protect MySQL injection for Security purpose
		$username = stripslashes($username);
		$password = stripslashes($password);
		
		// Selecting Database
		$connection->select_db("noisedatalist");
		
		// SQL query to fetch information of registerd users and finds user match.
		$query = $connection->query("select * from usersdata where password='$password' AND username='$username'");
		
		$rows = $query->num_rows;
		
		if ($rows == 1) {
			
			$_SESSION['login_user']=$username; // Initializing Session
			header("location: ../HTML5-Users/User_Sign_in.php"); // Redirecting To Other Page
			
		} else {
			$error = "NetID or Password is invalid !!";
		}
		
		$connection->close(); // Closing Connection
	}
}
?>

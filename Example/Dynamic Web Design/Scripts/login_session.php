<?php

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = new mysqli("127.0.0.1:3306", "root", "root");

// Selecting Database
$connection->select_db("noisedatalist");

session_start();// Starting Session

// Storing Session
$user_check=$_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User
$ses_sql=$connection->query("select username from usersdata where username='$user_check'");

$row = $ses_sql->fetch_assoc();

$login_session =$row['username'];

if(!isset($login_session)){
	$connection->close(); // Closing Connection
	header('Location: ../HTML5-Public/Index.php'); // Redirecting To Home Page
}
?>

<?php

session_start();

if(session_destroy()) // Destroying All Sessions
{
	header("Location: ../HTML5-Public/Index.php"); // Redirecting To Home Page
}

?>

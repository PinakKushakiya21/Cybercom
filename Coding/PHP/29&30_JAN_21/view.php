<?php
	// video 73

session_start();


/*if(isset($_SESSION['username']) && isset($_SESSION['age'])) {
	echo "Welcome, ". $_SESSION['username'].' with age '.$_SESSION['age'];
} else
{
	echo "Please login.";
}*/

// video 74

echo "Welcome, ". $_SESSION['username'].' with age '.$_SESSION['age'];
?>
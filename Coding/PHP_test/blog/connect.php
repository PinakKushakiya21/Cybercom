<?php

	
	$conerror = 'Could not connect';

	$host = 'localhost';
	$user = 'root';
	$password ='root';
	$db = 'usersdb';

    $con = mysqli_connect($host,$user,$password,$db) or die($conerror); 
    
    echo "connected";
	
?>
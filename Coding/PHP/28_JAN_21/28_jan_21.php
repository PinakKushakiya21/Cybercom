<?php
	// Word Censoring part 1 & 2(video 52 & 53)


	/*$find = array('hello','good','morning');
	$replace = array('how','was your','day?');
	if(isset($_POST['user']) && !empty($_POST['user']))
	{
		$user = $_POST['user'];
		$new_user = str_replace($find, $replace, $user);
		echo $new_user;
	}*/
?>
<!--<hr>

<form method="POST" action="#">
	<textarea name="user" rows="3" cols="10" <?php //echo $user;?>></textarea><br><br>
	<input type="submit" name="submit">
</form>-->


<?php echo "<br><br>";?>




<!--<?php

// Creating a find and replace application part 1,2,3,4 (video 54,55,56,57)
	
	//$offset = 0;

	/*if(isset($_POST['text']) && (isset($_POST['search']) && isset($_POST['replace'])))
	{
		$text = $_POST['text'];
		$search = $_POST['search'];
		$replace = $_POST['replace'];

		$search_lenght = strlen($search);

		if(!empty($text) && !empty($search) && !empty($replace))
		{
			while ($strpos = strpos($text , $search, $offset)) {
				$offset  = $strpos + $search_lenght;
				$text = substr_replace($text, $replace, $strpos, $search_lenght);
			}
			echo $text;
		}
		else {
			echo "Please fill all the field";
		}
	}*/

?>
<form method="POST" action="#">
	Written here :<br>
	<textarea name="text" rows="6" cols="30"></textarea><br>
	Search : <br>
	<input type="text" name="search"><br>
	Replace :<br>
	<input type="text" name="replace"><br>
	<input type="submit" name="Find and Replace">
</form>-->

<?php echo "<br><br>";?>


<!--<br>
<?php
// TimeStamps (video 58)
	
	/*$time = time();
	$date = date('D M Y @ H:i:s', $time);


	echo 'the current date/time is '.$date;*/
?>-->




<?php echo "<br><br>";?>


<!--<br>

<?php
// TimeStamps modifying (video 59)

	/*$time = time();
	$date = date('D M Y @ H:i:s', $time);        											//current time
	//$date_now = date('D M Y @ H:i:s', $time-60);  										//
	//$date_now_week = date('D M Y @ H:i:s', strtotime('+1 week'));
	//$date_now_week = date('D M Y @ H:i:s', strtotime('+1 week 2 hours 30 seconds'));
	$date_now = date('D M Y @ H:i:s', $time-(7*24*30*30));

	echo $date.'<br>';
	echo $date_now.'<br>';
	//echo $date_now_week;
	*/

?>-->




<?php echo "<br><br>";?>


<!--<br>
<?php
// Random Number Generation (video 60)
	
	/*if(isset($_POST['roll'])) {
		$rand = rand(1, 6);
		echo "You rolled a ". $rand;
	}*/

?>
<form action="#" method="POST">
	<input type="submit" name="roll" value="Roll dice.">
</form>-->





<?php echo "<br><br>";?>


<!--<br>
<?php
// $_SERVER Variables- Script Name (video 61)

	/*include 'newform.php';
	if(isset($_POST['submit']))
	{
		echo "Process 1";
	}*/
?>-->




<?php echo "<br><br>";?>


<!--<br>
<?php
// $_SERVER Variables- Host Name (video 62)
	
	/*require 'config.php';

	echo '<img src="'.$images.'header.gif" / >';
	*/
?>-->






<?php echo "<br><br>";?>


<!--<br>

<?php
// Using the Header to Force Page Redirect & ob_start (video 63,64 )
	
	//ob_start(); //creates an output buffer
?>


<h1>My Page</h1>
This is my page.

<?php
	/*$redirect_page = 'https://www.youtube.com/';
	$redirect = false;


	if ($redirect==true) {
		header('location: '. $redirect_page);
	}

	ob_end_clean(); //deletes the topmost output buffer and all of its contents
	ob_end_flush(); //deletes the topmost output buffer and outputs all of its contents
	*/
?>
-->




<?php echo "<br><br>";?>


<!--<br>
<?php
// Getting Visitors IP Address (video 65)

	/*require 'cofi.php';

	foreach ($ip_block as $ip) {
		//echo $ip.'<br>';
		if($ip==$ip) {
			die('Your IP Address is blocked'.$ip);
		}
	}
	*/

?>
<h1>Welcome!!</h1>-->



<?php echo "<br><br>";?>


<!--<br>
<?php
// Better Way to Get Visitors IP Address (video 66)

	/*$http_client_ip = $_SERVER['HTTP_CLIENT_IP'];
	$http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];
	$remote_addr = $_SERVER['REMOTE_ADDR'];

	if(!empty($http_client_ip)) {
		$ip = $http_client_ip;
	}
	elseif (!empty($http_x_forwarded_for)) {
		$ip = $http_x_forwarded_for;
	}
	else {
		$ip = $remote_addr;
	}

	echo $ip;
	*/
?>-->




<?php echo "<br><br>";?>


<!--<br>
<?php
// Detecting a Visitors Browser Part 1 & 2 (video 67,68)
	
	/*$browser = get_browser(null, true);
	//print_r($browser); // used in video 67
	$browser = strtolower($browser['browser']);

	if($browser!='chrome') {
		echo 'You are not using google chrome . please use it.';
	}*/

?>-->







<?php echo "<br><br>";?>


<!--<br>
<?php
// Working with $_GET Variables (video 69)

	/*1. Does it exist? or "Has it been submitted"
	2. Is it empty? or "Does value == NULL"
	3. Display back to user	*/
/*
	if(isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year'])) {
		$day = $_GET['day'];
		$date = $_GET['date'];
		$year = $_GET['year'];
		if (!empty($day) && !empty($date) && !empty($year)) {
			echo $day.' '.$date.' '.$year;
		} else {
			echo 'Fill all the fields..';
		}
	}
*/
?>

<form action="#" method="GET">
	Day : <br><input type="text" name="day"><br>
	Date : <br><input type="text" name="date"><br>
	Year : <br><input type="text" name="year"><br>
	<input type="submit" name="submit">
</form>
-->



<?php echo "<br><br>";?>


<!--<br>
<?php
// Working with $_POST Variables (video 70)

	$match = 'pass123';
	
	/*if(isset($_POST['password'])) {
		$password = $_POST['password'];
		if (!empty($_POST['password'])) {
			if ($password==$match) {
			echo "This is correct";
		} else {
			echo "This is incorrect";
		}
		}
	}
	else
		echo "Enter password";
	*/
?>

<form action="#" method="POST">
	Password : 
	<br><input type="password" name="password"><br>
	<input type="submit" name="submit">
</form>
-->






<?php echo "<br><br>";?>

<!--<br>
<?php
// Working with form data (video 71)

?>

<form action="#" method="GET">
	Day : <br><input type="text" name="day" /><br>
	Date : <br><input type="text" name="date" /><br>
	Year : <br><input type="text" name="year" /><br>
	<br><input type="submit" name="submit" value="Submit" />
</form>-->








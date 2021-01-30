<!--<?php
	// Using HTMLentities 
	/*if(isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year'])) {
		$day = htmlentities($_GET['day']);
		$date = htmlentities($_GET['date']);
		$year = htmlentities($_GET['year']);
		if (!empty($day) && !empty($date) && !empty($year)) {
			echo $day.' '.$date.' '.$year;
		} else {
			echo 'Fill all the fields..';
		}
	}*/

?>
<form method="POST" action="#">
	Day : <br><input type="text" name="day"><br>
	Date : <br><input type="text" name="date"><br>
	Year : <br><input type="text" name="year"><br>
	<br><input type="submit" name="submit"><br>
</form>-->



<br><br>

<!--<?php
	// Setting PHP Session (video 73)
	/*session_start();

	$_SESSION['username']='pinak'; 
	*/
?>-->





<br><br>

<!--<?php
	// Unsetting PHP Session (video 74)
	/*session_start();

	$_SESSION['username']='pinak'; 
	$_SESSION['age']='21'; 
	*/
?>-->




<br><br>

<!--<?php
	// Creating cookies with PHP (video 75)

	//setcookie('username', 'pinak', time()+10);

?>-->






<br><br>

<?php
	// Deleting cookies with PHP (video 76)

	setcookie('username', 'pinu', time()+1000);

	setcookie('username', 'pinu', time()-1000);

?>


























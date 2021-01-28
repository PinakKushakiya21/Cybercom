<?php
	
	//Array (video = 39)
	/*$food = array('pasta', 'pizza', 'burger', 'fries');
	//echo $food[0];
	//print_r($food);
	//$food[4]='coke';
	print_r($food);*/





	echo "<br>";


	// Associative Arrays (video 40)
	/*$food = array('pasta'=>300, 'pizza'=>1000, 'burger'=>200, 'fries'=>50);
	//print_r($food);
	echo $food['pasta'];*/





	echo "<br>";

	//Multi-Dinemsional Array (video 41)

	/*$food = array('Healthy'=>array('salad','fruit'),
				  'Unhealthy'=>array('pizza','pasta'));

	echo $food['Unhealthy'][1];*/






	echo "<br>";

	//For Each loop (video 42)
	/*$food = array('Healthy'=>array('salad','fruit','milk'),
				  'Unhealthy'=>array('pizza','pasta','burger'));

	foreach ($food as $element => $inner_element) {
		echo '<strong>'.$element."</strong><br>";
		foreach ($inner_element as $item) {
			echo $item.'<br>';
		}
	}*/








	echo "<br>";

	//include and require (video 43)

	//include 'header.php';
	/*require 'header.php';
	//$var = 'String';
	echo $var1;
	*/






	echo "<br>";

	//include_once and require_once (video 44)
	/*require 'header.php';
	require_once 'header.php';

	include_once 'header.php';*/






	echo "<br>";

	//More on expression matching(video 45)
	
	/*function has_space($String)
	{
		if (preg_match('/ /', $String)) {
			return true;
		}
		else
		{
			return false;
		}
	}
	
	$String = 'Hellogood /morning';

	if (has_space($String)) {
		echo "Has atleast 1 space";
	} else {
		echo "Has no space";
	}*/






	echo "<br>";

	// String Functions - String length(video 46)
	/*$String = 'Pinak';
	$string_length = strlen($String);

	for ($i=1; $i <$string_length ; $i++) { 
		echo $i.'<br>';
	}
	*/
	//echo $string_length;






	echo "<br>";
	// String Functions - Upper Lower case(video 47)
	/*$String = 'I Am A Good Boy.';

	$string_lower = strtolower($String);
	$string_upper = strtoupper($String);
	//echo $string_lower;
	echo $string_upper;*/
	
	/*if (isset($_GET['name']) && !empty($_GET['name'])) {
		$name = $_GET['name'];
		$name_lc = strtolower($name);

		if ($name_lc === 'pinak') {
			echo "You are the best.".$name;
		}
	}*/






	echo "<br>";
	// String Functions - Position - 1 & 2(video 48  &  49)
	/*$offset =0;

	$find = 'book';
	$find_len = strlen($find);
	$String = 'This is my book, and it is of physics.';

	while ($string_pos = strpos($String, $find, $offset)) {
		echo $find. ' Found at ' .$string_pos. '<br>';
		$offset = $string_pos + $find_len;
	}
	*/






	echo "<br>";
	// String Functions - Replacing Part of String(video 50)
	/*
	$String = 'This part don\'t search. This part search';
	$string_new = substr_replace($String, 'pk', 29, 4);

	echo $string_new;
	*/





	echo "<br>";
	// String Functions - Replacing Predefined Part of String(video 51)
	/*
	$find = array('is','string','example');
	$replace = array('IS','STRING','EXAMPLE');

	$String = 'This is a string, and is an example';

	$new_string = str_replace($find, $replace, $String);

	echo $new_string;
	*/
	
	
?>





<!--<form action="27_jan_21.php" method="GET">
	Name : <input type="text" name="name"><br><br>
	<input type="submit" name="submit">
</form>-->
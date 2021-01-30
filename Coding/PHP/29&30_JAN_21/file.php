<?php
	// file handling - writing (video 77)
	/*$handle = fopen('names.txt', w);
	fwrite($handle, $name."\n");
	fclose($handle);
	*/





/*if (isset($_POST['name'])) {
	$name = $_POST['name'];
	if (!empty($name)) {

		$handle = fopen('names.txt', w);
		fwrite($handle, $name."\n");
		fclose($handle);

		//echo "Current names in files";

		$count = 0;
		
		$readin = file('names.txt');
		$readin_count = count($readin);
		foreach ($readin as $fname) {
			echo trim($fname);
			if ($count<=$readin_count) {
				echo ", ";
			}
			//$count++;
		}
	}else {
		//echo "please put the names";
	}
} else {
	//echo "Written";
}
*/






// File handling - Appending a file

$handle = fopen('names.txt', 'a'); 
fwrite($handle, );
fclose($handle);

echo "Written";

?>

<form action="#" method="POST">
	Name : <br>
	<input type="text" name="name"><br><br>
	<input type="submit" name="submit">
</form>






























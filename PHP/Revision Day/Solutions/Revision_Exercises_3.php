<?php

/* -- Exercise  : 
	1 :
	Write a PHP script that gives the multiplication table of 2
	Multiplication table from 1 to 10 (Already done in previous exercise)

	2 :
	Modify this script to give the multiplication table of any number ($x for example) in a table

	3 :
	Create a form with one input.
	When you validate this form, it should display the multiplication table of the number you entered.
	You have to check if the value is correct (no float and no string, ONLY integer).

	4 :
	Display the multiplication table in a nice HTML format table style.
*/
?>

<hr>
<form action="" method="GET">
	<input type="number" name="mynumber" placeholder="Your number">
	<input type="submit" name="submit2" value="Login">
</form>

<?php

// Check if the button was clicked
if (isset($_GET['submit2'])) {

	if (isset($_GET['mynumber']) && ((int) $_GET['mynumber'] > 0)) {

		$x = $_GET['mynumber'];
		echo '<h3>Multiplication table of ' . $x . '</h3>';
		echo '<table border=1>
		<tr>
		<th>Value</th>
		<th>Result</th>
		</tr>';

		for ($i = 1; $i <= 10; $i++) {
			echo '<tr>';
			echo '<th>' . $i . '</th>';
			echo '<th>' . ($i * $x) . '</th>';
			echo '</tr>';
		}

		echo '</table>';
	} else {
		echo "You should enter a valid number";
	}
}


?>
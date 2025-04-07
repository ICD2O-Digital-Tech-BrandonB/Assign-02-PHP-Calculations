<?php
	// get the euro and rand from the textfields
	$euro = $_POST['euro'];
	$rand = $_POST['rand'];
    define("zar", "20.3843");

	// calculate exchange of the currencies
	$randconversion = $rand / zar;
    $euroconversion = $euro * zar;

    // prints the collected and processed data to convert on the webpage.
?>
<h3>Results:</h3>
You have <?php echo "$euroconversion" ?>$ in African Rand<sup>
<h3>Results:</h3>
You have <?php echo "$randconversion" ?>$ in Euros<sup>
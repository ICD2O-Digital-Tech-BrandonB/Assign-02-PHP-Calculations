<!DOCTYPE html>
<html lang="en-ca">
  <head>

    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="php euro and rand conversions">
    <meta name="keywords" content="immaculata, icd2o">
    <meta name="author" content="BrandonBCode">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./faviconphp/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./faviconphp/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./faviconphp/favicon-16x16.png">
    <link rel="manifest" href="./faviconphp/site.webmanifest">

    <!--MDL Crucial Code-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-purple.min.css" />

    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- Title for Browser Tab -->
    <title>Euros to ZAR</title>
  </head>
  <body>

    <!--MDL Crucial Code-->
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

    <!--MDL Header-->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Conversion of Euro and ZAR</span>
        </div>
      </header>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Conversion of Euros to Rand</h1>";
			echo "<h3>This program will calculate the conversion of euros to rand using PHP.</h3>";
		?>

		<!-- form to get the euros and rand from the user -->
    <form action="./results.php" method="post" target="results">
      <label for=lblEuro">Euros ($):</label>
      <input type="number" id="euro" placeholder="Enter # of Euros ($)" name="euro"><br><br>
      <label for="lblRand">African Rand ($):</label>
      <input type="number" id="rand" placeholder="Enter # of Rand ($)" name="rand"><br><br>
      <input type="submit" value="Calculate Conversion">
		</form>

			<!-- iframe for the results to show on the web page. -->
			<iframe id="euro" name="results">			
				You have " + $euro + $ + African Rand
	    </iframe>

      <!-- iframe for the results to show on the web page. -->
			<iframe id="rand" name="results">			
				You have " + $rand + $ + Euros
	    </iframe>

      <!--This allows us tok display an image in php. -->
     <?php
      echo ' 
      <!DOCTYPE html PUBLIC>
      <html>
      <img src="./images/cash-exchange.jpg" width="50" height="70" title="cash-exchange" alt="cash exchange image" />

      </html>
      ';
      ?>
	</body>
</html>
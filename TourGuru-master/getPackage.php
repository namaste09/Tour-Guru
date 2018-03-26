<!DOCTYPE html>
<html>
	<head>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
	</head>
	<body><?php 
		session_start();
		$msg = $_SESSION["p_description"];

		$msg = wordwrap($msg,70);

		mail($_SESSION["email"],"Thank you for using Tour Guru!",$msg,"From: pranman.manglani1@gmail.com");
	?>

	<fieldset class="package">
	<legend>YOUR PACKAGE</legend>
		<p><?php print_r($_SESSION["p_name"]);?></p>
		<br>
		<p><?php print_r($_SESSION["p_description"]);?></p>
		<br>
		<p>Locations: <?php print_r($_SESSION["p_location"]);?></p>
		<br>
		<p>Number of days: <?php print_r($_SESSION["p_days"]);?></p>
		<br>
		<p>Features: <?php print_r($_SESSION["p_features"]);?></p>
		<br>
		<p>Cost: INR <?php print_r($_SESSION["p_cost"]);?></p>
	</fieldset>
	</body>
</html>
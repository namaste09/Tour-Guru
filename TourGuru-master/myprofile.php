<html>
<body>
<?php
	session_start();
	$username= $_SESSION["username"];
	echo "Your username is: ".$username;
?>
</body>
</html>
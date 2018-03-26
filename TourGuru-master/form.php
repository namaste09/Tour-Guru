 <html>
 <body>
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "marvel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$firstname =  $_POST['firstname'];
$lastname =  $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email= $_POST['email'];

$sql = "INSERT INTO users (firstname,lastname,username,password,email) VALUES ('$firstname', '$lastname', '$username', '$password' ,'$email')";
$result=mysqli_query($conn,$sql);
if($result){
	echo "Registered successfully";
}
else
	echo "Error";
	
?>

<h3> <a href="login.php">LOG-IN</a></h3>

    </body>
</html>

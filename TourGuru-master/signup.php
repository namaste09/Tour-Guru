<html>
<?php



$user = 'root';
$pass = '';
$db = 'tourguru';
session_start();
$connection = mysqli_connect('localhost',$user,$pass);
if(!$connection)
	echo 'Connection NOt Established';
if(!mysqli_select_db($connection,$db))
	echo 'Database Not Fount';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordconf = $_POST['passwordconf'];
$_SESSION['username'] = $username;
if($password != $passwordconf)
{
	echo 'Passwords Donot Match';
	header('Location:login1.html');
}
$fullname = $firstname." ".$lastname;
$sql = "insert into user (u_name,u_email,u_username,u_password) values ('$fullname','$email','$username','$password')";

if (!mysqli_query($connection,$sql))
{
 echo 'Not Inserted';
}
else
{
 echo 'Inserted Successfully';
}

header('Location:confirm.html');


?>

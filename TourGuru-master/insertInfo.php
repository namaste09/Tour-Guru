<?php

session_start();

$user = 'root';
$pass = '';
$db = 'tourguru';

$con = mysqli_connect('localhost',$user,$pass);
if(!$con)
{
 echo 'Not Connected To Server';
}
if (!mysqli_select_db ($con,$db))
{
 echo 'Database Not Selected';
}
$name = $_POST['name'];
$email = $_POST['email'];
$_SESSION["email"] = $_POST['email'];
$location = $_POST['location'];
$date = $_POST['date'];
if(isset($_POST['days'])){
	$days = $_POST['days'];
}
if(isset($_POST['location'])){
	$location = $_POST['location'];
}
if(isset($_POST['num_adult'])){
	$num_adult = $_POST['num_adult'];
}
if(isset($_POST['num_child'])){
	$num_child = $_POST['num_child'];
}

$sql = "insert into user (u_name,u_email,u_starting_date,u_duration,u_travelling_to,u_num_adult,u_num_child) values ('$name','$email','$date','$days','$location','$num_adult','$num_child')";

if (!mysqli_query($con,$sql))
{
 echo 'Not Inserted';
}
else
{
 echo 'Inserted Successfully';
}

$sql = "SELECT * FROM `packages` WHERE p_name='$location'";

$_SESSION["package_id"] = '$';
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_array($result);
		$_SESSION["package_id"] = $row[0];
		$_SESSION["p_name"] = $row[1];
		$_SESSION["p_description"] = $row[2];
		$_SESSION["p_days"] = $row[3];
		$_SESSION["p_location"] = $row[4];
		$_SESSION["p_features"] = $row[5];
		$_SESSION["p_cost"] = $row[6];
		echo "package_id: $row[0]";
		echo "selected successfully";
	} else{
        echo "No records matching your query were found.";
    }
}
header('Location: getPackage.php');

?>﻿
<?php
$user = 'root';
$pass = '';
$db = 'tourguru';

$connection = mysqli_connect('localhost',$user,$pass);
if(!$connection)
	echo 'Connection NOt Established';
if(!mysqli_select_db($connection,$db))
	echo 'Database Not Fount';

   session_start();
   
   

      // username and password sent from form 
      
      $myusername = $_POST['username'];
	  $_SESSION['username'] = $myusername;
      $mypassword = $_POST['password'];
	  
	  echo $myusername;
	  
      $count=0;
      $sql = "SELECT u_username FROM user WHERE u_username='$myusername' and u_password='$mypassword'";
	  echo "line 1 okay";
      $result = mysqli_query($connection,$sql);
	  echo "line 1 okay";
      $row = mysqli_fetch_array($result);
	  echo "line 1 okay";
      $count = mysqli_num_rows($result);
	  echo "line 1 okay";
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		echo $count;
      if($count == 1) {
		  
         header("Location:index.html");
      }
      else {
		  echo "Your Username or Password is invalid";
      }
   
?>
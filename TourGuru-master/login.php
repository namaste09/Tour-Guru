<?php
  // error_reporting(0);
    define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'marvel');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   //session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $mypassword = $_POST['password'];
      
      $sql = "SELECT username FROM users WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
		  echo 'you have successfully logged in ';
         header("location: register.html");
      }
      else {
         echo '<script language="javascript">';
         echo 'alert("Your Username or Password is invalid")';
         echo '</script>';
      }
   }

echo '



<style>
 

h1{

margin-top: 40px;
display: block;

    font-size: 50px;
 
 margin-top: 50px;

 font-family: Tangerine;

    font-weight: bold;
}

#head{
margin-top: 0px;
background-color: black;
height: 10%;
width: 100%;
text-align: center;
}
#form {

 text-align: center;

}

input[type=text]:focus {

    width: 40%;

}
input[type=password]:focus {

    width: 40%;

}
input[type=email]:focus {

    width: 40%;

}



input[type=text],select {
    
	width: 20%;
 	padding: 12px 20px;

    margin: 8px;

    display: inline-block;

    border: 1px solid #a1a1a1;

    border-radius: 4px;

    box-sizing: border-box;

}


input[type=password],select {
    
	width: 20%;
 	padding: 12px 20px;

    margin: 8px;

    display: inline-block;

    border: 1px solid #a1a1a1;

    border-radius: 4px;

    box-sizing: border-box;

}


input[type=submit],
 select {
  
  width: 20%;
 
   padding: 12px 20px;
  
  margin: 8px 0;

    display: inline-block;
 
   border: 1px solid #a1a1a1;
 
   border-radius: 4px;

    box-sizing: border-box;

}


input[type=reset], 
select {
 
   width: 20%;

    padding: 12px 20px;

    margin: 8px 0;

    display: inline-block;
 
   border: 1px solid #a1a1a1 ;

    border-radius: 4px;

    box-sizing: border-box;

}


input[type=email],select {
    
	width: 20%;
 	padding: 12px 20px;

    margin: 8px;

    display: inline-block;

    border: 1px solid #a1a1a1;

    border-radius: 4px;

    box-sizing: border-box;

}
nav{
margin-top: 160px;
float: right;
text-decoration: none;
margin-right: 250px;
font-size: 23px;
font-family: "forte";

;
}
	a:link, a:visited {
    background-color: black;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}

a:hover, a:active {
    font-size: 29px;
text-decoration: none;
}

header{
background-color: black;
height: 300px;}




</style>






<div id="head">

<h1 style="color:#e6e6e6">Log-In</h1>
</div>




<div id="form">


<form name="forms" action="" method="POST">
<br>
<br>

<input type="text"  placeholder=" Username" name="username" required >
<br>

<input type="password"   placeholder="Password" name="password" required >
<br>




 





<br><br>


<input type="submit"  value="Log-In">



</form> 
</div>

';
?>

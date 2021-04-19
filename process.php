<?php 
  include("db/DbConnectSQLI.php");
  $username = "";
  $email = "";
  if (isset($_POST['register'])) {
  	$username = $_POST['username'];
  	$email = $_POST['email'];
  	$password = $_POST['password'];

  	$sql_user = "SELECT * FROM users WHERE username='$username'";
  	$sql_email = "SELECT * FROM users WHERE email='$email'";
  	$result_user = mysqli_query($conn, $sql_user);
  	$result_email = mysqli_query($conn, $sql_email);

  	if (mysqli_num_rows($result_user) > 0) {
  	  $name_error = "Sorry... username already taken"; 	
  	}else if(mysqli_num_rows($result_email) > 0){
  	  $email_error = "Sorry... email already taken"; 	
  	}else{
           $query = "INSERT INTO users (username, email, password) 
      	    	  VALUES ('$username', '$email', '$password')";
           $results = mysqli_query($conn, $query);
           header("Location: index.php");
  	}
  }
?>
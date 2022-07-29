<?php
session_start();

// initializing variables
$email = "";
$password    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'aavaran');



// LOGIN USER
if (isset($_POST['email'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  
  	$password = md5($password);
  	$query = "SELECT * FROM signup WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
      header('location: index.html');
  	}else {
  		//array_push($errors, "Wrong username/password combination");
          echo "Wrong Credentials";
          
  	}
  
}

?> 
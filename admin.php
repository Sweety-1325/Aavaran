<?php 

$host="localhost";
$user="root";
$password="";
$db="aavaran";

$conn=new mysqli($host,$user,$password,$db);
// if($conn->connect_error)
// {
//     echo "Error - 404";
// }
// else{
//     echo "connected";
// }
$password=$_POST['password'];
// echo $email;
// echo $password;


if($password=='ADMIN123'){
    echo "Welcome!!Logged in";
    header('location: adminpage.html');
}
else 
{
   echo "<script>alert('Check Your credentials')</script>";
   echo "<script>location.replace('index.html')</script>";
}
?>
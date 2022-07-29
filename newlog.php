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

$email=$_POST['email'];
$password=$_POST['password'];
// echo $email;
// echo $password;

$sql="Select * from signup where email='$email' and password='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if($row['email']==$email && $row['password']==$password){
    echo "Welcome!!Logged in";
    header('location: index.html');
}
else 
{
   echo "<script>alert('Check Your credentials')</script>";
   echo "<script>location.replace('index.html')</script>";
}
?>
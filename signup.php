<?php
    $email= $_POST['email'];
    $password= $_POST['password'];
    

    //DATABASE CONNECTION
    $conn=new mysqli("localhost","root","","aavaran");
    if($conn->connect_error){
        die('Connection failed :' .$conn->connect_error);
    }else{
        $stmt=$conn->prepare("insert into signup(email,password)
            values(?,?)");
            $stmt->bind_param("ss",$email,$password);
            $stmt->execute();
            echo "Submitted...";
            $stmt->close();
            $conn->close();
    }
    header('location: index.html');
?>
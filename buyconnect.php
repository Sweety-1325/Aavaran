<?php
    $Name= $_POST['Name'];
    $Number= $_POST['Number'];
    $City= $_POST['City'];
    $Email= $_POST['Email'];
    $house= $_POST['house'];
    $bhk= $_POST['bhk'];
    $comment= $_POST['comment'];

    //DATABASE CONNECTION
    $conn=new mysqli("localhost","root","","aavaran");
    if($conn->connect_error){
        die('Connection failed :' .$conn->connect_error);
    }else{
        $stmt=$conn->prepare("insert into buy(Name,Number,Email,house,bhk,comment)
            values(?,?,?,?,?,?)");
            $stmt->bind_param("ssssis",$Name,$Number,$Email,$house,$bhk,$comment);
            $stmt->execute();
            echo "Submitted...";
            $stmt->close();
            $conn->close();
    }

?>

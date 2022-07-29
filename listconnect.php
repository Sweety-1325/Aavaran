<?php
    $Name= $_POST['Name'];
    $Number= $_POST['Number'];
    $City= $_POST['City'];
    $Email= $_POST['Email'];
    $house= $_POST['house'];
    $type= $_POST['type'];
    $bhk= $_POST['bhk'];
    $price= $_POST['price'];
    $comment= $_POST['comment'];

    //DATABASE CONNECTION
    $conn=new mysqli("localhost","root","","aavaran");
    if($conn->connect_error){
        die('Connection failed :' .$conn->connect_error);
    }else{
        $stmt=$conn->prepare("insert into list(Name,Number,City,Email,house,type,bhk,price,comment)
            values(?,?,?,?,?,?,?,?,?)");
            $stmt->bind_param("ssssssiis",$Name,$Number,$City,$Email,$house,$type,$bhk,$price,$comment);
            $stmt->execute();
            echo "Submitted Successfully...";
            $stmt->close();
            $conn->close();
    }

?>

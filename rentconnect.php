<?php
    $Name= $_POST['Name'];
    $Number= $_POST['Number'];
    $Email= $_POST['Email'];
    $house= $_POST['house'];
    $bhk= $_POST['bhk'];
    $code= $_POST['code'];

    //DATABASE CONNECTION
    $conn=new mysqli("localhost","root","","aavaran");
    if($conn->connect_error){
        die('Connection failed :' .$conn->connect_error);
    }else{
        $stmt=$conn->prepare("insert into rent(Name,Number,Email,house,bhk,code)
            values(?,?,?,?,?,?)");
            $stmt->bind_param("ssssis",$Name,$Number,$Email,$house,$bhk,$code);
            $stmt->execute();
            echo "Submitted...";
            $stmt->close();
            $conn->close();
    }

?>

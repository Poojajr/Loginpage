<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = new mysqli("localhost:3310","root","","test1");
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
       $stmt = $conn->prepare("insert into idregistration(username,password)
       values(?,?)");
       $stmt->bind_param("ss",$username,$password);
       $stmt->execute();
       echo "registration successfully...";
       $stmt->close();
       $conn->close();
    }
?>
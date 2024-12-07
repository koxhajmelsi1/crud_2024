<?php

    include 'db.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST ['age'];

    $sql = "INSERT INTO user (name,email,age) VALUES ('$name', '$email', '$age')";

    if($conn->query($sql)=== TRUE){
        echo "Përdoruesi u shtua me sukses";
    }else{
        echo "Gabim" . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    header("location: index.php");
    exit();

?>
<?php
include 'db.php';


$id = $_POST['ID'];
$name = $_POST['Name'];
$email = $_POST ['email'];
$age = $_POST ['age'];

$sql = "UPDATE user SET name='$name', email='$email, age='$age' WHERE id=$id";

if($conn->query($sql)===TRUE){
    echo "Perdoruesi u perditsua me sukses!";
}else{
    echo "Gabim!" .$sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: index.php");
exit();

?>
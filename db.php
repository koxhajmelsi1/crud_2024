<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_24";


//Krijmi i lidhjes
$conn = new mysqli($servername, $username, $password, $dbname);

//Kontrolli i lidhjes
if ($conn->connect_error){
    die("Lidhja dështoi: " . $conn->connect_error);
}


?>
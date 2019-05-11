<?php

$servername = "localhost" ;
$username= "root" ;
$password = "202555";
$DAT_NAME = "putxet" ;


// Create connection
$conn = new mysqli($servername, $username, $password ,$DAT_NAME );

 Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$s = 4 ;

$sql = "INSERT INTO test VALUES ($s)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>

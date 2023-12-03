<?php 
    $servername = "192.168.1.4";
    $username = "amrit";
    $pass = "1234";
    $dbname = "LearnHTML";

    $conn = new mysqli($servername, $username, $pass, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>
<?php 
	$servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "collage";

    $currentDir = getcwd();

    $id = $_GET['id'];


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // echo 'connected!';
    
    // echo $currentDir;

    // if (mkdir($currentDir . "/uploads/$id", 0777)) {
    //     echo "Directly created successfully";
    // } else {
    //     echo "failed to create directory";
    // }
 ?>

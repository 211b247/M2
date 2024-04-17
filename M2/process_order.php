<?php
    // Create connection to database
    $servername = "localhost"; // Change if your database is hosted elsewhere
    $username = "root";
    $password = "";
    $database = "employee2";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn) {
        echo"not connected";
    }
    else{
        echo"connected"
    }
?>

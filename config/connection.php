<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "training_institute_website";
    // Create Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check Connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // Set Charset
    mysqli_set_charset($conn, "utf8mb4");
?>
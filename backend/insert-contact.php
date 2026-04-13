<?php
    require '../config/connection.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name    = mysqli_real_escape_string($conn, $_POST['name']);
        $email   = mysqli_real_escape_string($conn, $_POST['email']);
        $contact = mysqli_real_escape_string($conn, $_POST['contact']);
        $course  = mysqli_real_escape_string($conn, $_POST['course']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        $insert = mysqli_query($conn, "INSERT INTO contact_enquiries 
        (name, email, contact, course, message) 
        VALUES ('$name', '$email', '$contact', '$course', '$message')");
        if ($insert) {
            header("Location: ../contact.php?status=success");
            exit();
        } else {
            header("Location: ../contact.php?status=error");
            exit();
        }
    }
?>
<?php
    require 'connection.php';

    session_start();

    //Contact form action start

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    $query = "INSERT INTO users (name, email, number, message) VALUES ('$name', '$email', '$number', '$message')";

    mysqli_query($con, $query);

    if ($query) {
        $_SESSION['status'] = "Your message is sent successfully!";
        header('location:index.php#contact');
    }
    else {
        echo "Something went wrong";
    }
    //Contact form action end


?>
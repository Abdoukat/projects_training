<?php
    session_start();
    $con = mysqli_connect('localhost', 'root');

    if ($con) {
        echo "Connection Successful";
    }
    else {
        echo "Connection Failed";
    }

    mysqli_select_db($con, 'photography');

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
    
    
?>
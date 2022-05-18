<?php
    // require "connection.php";

    $host = "localhost";
    $db_name = "photographer";
    $username = "root";
    $password = "";
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);

    // select the image 
    $query = "select * from pictures WHERE id = ?"; 
    $stmt = $con->prepare( $query );
    
    // bind the id of the image you want to select
    $stmt->bindparam(1, $_GET['id']);
    $stmt->execute();
    
    
    if( $num ){
        // if found
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // specify header with content type,
        // you can do header("Content-type: image/jpg"); for jpg,
        // header("Content-type: image/gif"); for gif, etc.
        header('location:index.php');
        
        //display the image data
        print $row['data'];
        exit;
    }else{
        //if no image found with the given id,
        //load/query your default image here
    }


?>
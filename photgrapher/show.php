<?php
    require "connection.php";

    $pictures = mysqli_query($con, "SELECT * FROM pictures");
    var_dump($pictures);
    die;
?>
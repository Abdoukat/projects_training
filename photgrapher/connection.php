<?php
    namespace App;
    

    $con = mysqli_connect('localhost', 'root');

    // if ($con) {
    //     echo "Connection Successful";
    // }
    // else {
    //     echo "Connection Failed";
    // }

    
    mysqli_select_db($con, 'photography');

?>
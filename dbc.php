<?php
    define ('DB_USER', 'giuliogabrieli_it');
    define ('DB_PASS', 'b^8M;&G$?RZ!:yH:/3*Nr]$*337)>Eu#');
    define ('DB_HOST', 'giuliogabrieli.it.mysql');
    define ('DB_NAME', 'giuliogabrieli_it');
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
        echo 'Connected';
    };
?>
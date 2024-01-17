<?php
    define ('DB_USER', 'giuliogabrieli_it');
    define ('DB_PASS', 'b^8M;&G$?RZ!:yH:/3*Nr]$*337)>Eu#');
    define ('DB_HOST', 'giuliogabrieli.it.mysql');
    define ('DB_NAME', 'giuliogabrieli_it');
    $dbconn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if ($dbconn->connect_error) {
        die("Connection failed: " . $dbconn->connect_error);
    }
?>
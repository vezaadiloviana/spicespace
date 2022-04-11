<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $db_name    = "db_spicesspace";

    /* $servername = "localhost";
    $username   = "kelastii_hanvezrul";
    $password   = "hanvezrul1";
    $db_name    = "kelastii_db_spicesspace"; */
    
    $conn = new mysqli($servername, $username, $password, $db_name);

    if ($conn->connect_error) {
        die("Connection Failed : " . $conn->connect_error);
    }
?>
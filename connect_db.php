<?php
    $host        = "host = 127.0.0.1";
    $port        = "port = 5432";
    $dbname      = "dbname = bob";
    $credentials = "user = bob password=okayGo!";

    $connection_status = "";

    $db = pg_connect("$host $port $dbname $credentials");
    if(!$db) {
        $connection_status = "Error : Unable to open database\n";
    } else {
        $connection_status = "Opened database successfully\n";
    }
?>
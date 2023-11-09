<?php
    // $host        = "host = 127.0.0.1";
    // $port        = "port = 5432";
    // $dbname      = "dbname = bob";
    // $credentials = "user = bob password=okayGo!";

    // $host        = "host = dpg-cl6l2r472pts73bj0je0-a";
    // $port        = "port = 5432";
    // $dbname      = "dbname = math_practice_db";
    // $credentials = "user = math_practice_db_user password=v9PUxst8P1O7l1ZOvXr3kC0VSpwe6sYZ";

    $connection_status = "";

    $db = pg_connect("postgres://math_practice_db_user:v9PUxst8P1O7l1ZOvXr3kC0VSpwe6sYZ@dpg-cl6l2r472pts73bj0je0-a.oregon-postgres.render.com/math_practice_db");
    if(!$db) {
        $connection_status = "Error : Unable to open database\n";
    } else {
        $connection_status = "Opened database successfully\n";
    }
    // echo $connection_status;
?>
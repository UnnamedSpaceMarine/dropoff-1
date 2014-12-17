<?php
    // connect to database
    $dbh = mysql_connect("localhost", "unnamed2_admin2", "Sp@cemar1ne") or die("Connection failed");
    mysql_select_db("unnamed2_dropoff");

    // Set timezine
    date_default_timezone_set('America/Chicago');

    $user_date = date('Y-m-d');
    $course_status = array('active','pending','archived');
    $local_path = '/your_folder/';
?>

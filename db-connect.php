<?php
$database_connection = mysqli_connect('localhost', 'root', '', 'nova-store');

// Check if the connection was successful
if ($database_connection->connect_error) {
    echo $database_connection->connect_error;
}


// Check connection
if ($database_connection->connect_error) {
    die("Connection failed: " . $database_connection->connect_error);
}





<?php

//since we will need this database connection in a lot of places, its better to put it in its own file.
//then when we need a connection we just call this code.

    $servername="localhost";
    $username="root";
    $password="";
    $db_name="realproperties";
    $conn = new mysqli($servername, $username, $password, $db_name);
if ($conn->connect_error) {
    die("Connection has failed".$conn->connect_error);
}

?>
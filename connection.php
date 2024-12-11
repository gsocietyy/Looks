<?php

$username="root";

$conn = mysqli_connect('localhost','root','','thriftplus_db');

if($conn->connect_error){
    echo "connection failed" . $conn->connect_error;
}

?>
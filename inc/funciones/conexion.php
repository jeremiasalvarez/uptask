<?php

$conn = new mysqli(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PW'), getenv('DB_NAME'));

if($conn->connect_error){
    echo $conn->connect_error;
}

$conn->set_charset('utf8');
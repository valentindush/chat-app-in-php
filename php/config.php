<?php

    $conn = mysqli_connect("localhost", "root", "", "chat_app");

    if(!$conn){
        echo "DB CREATED" . mysqli_connect_error();
    }
?>
<?php
    session_start();
    include "config.php";

    $outgoing_id = $_SESSION['unique_id'];

    $searchQuery = mysqli_real_escape_string($conn, $_POST['searchQuery']);
    $output = "";

    $sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id}  AND (fname LIKE '%{$searchQuery}%' OR lname LIKE '%{$searchQuery}%')");

    if(mysqli_num_rows($sql)){
        include "data.php";
        echo $output;
    }else{
        $output .= "No results found related to your search";
        echo $output;
    }

?>
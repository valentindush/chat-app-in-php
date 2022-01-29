<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once 'config.php';
        $outgoing_id = mysqli_real_escape_string($conn,$_POST['outgoing']);
        $incoming_id = mysqli_real_escape_string($conn,$_POST['incoming']);
        $message = mysqli_real_escape_string($conn,$_POST['msg']);

        if(!empty($message)){
            $sql = mysqli_query($conn, "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg) VALUES ({$outgoing_id}, {$incoming_id}, '{$message}')") or die();
        }

    }else{
        header("../login.php");
    }
?>
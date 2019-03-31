<?php
    session_start();
    
    $hostName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "apartments";

    $conn = new mysqli($hostName, $userName, $password, $dbName);

    date_default_timezone_set('Asia/Kolkata');
    $t = time();
    $email = $_SESSION['email'];

    $sql = "UPDATE ADMIN SET TIMESTAMP = '$t' WHERE EMAIL = '$email'";

    $conn->query($sql);

    session_unset();
    session_destroy();

    $conn->close();

    header("Location: ../index.php");
?>
<?php



$dbServername ="localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName ="log_in_system";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    $sql = "SELECT * FROM users WHERE user_uid ='Admin';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result); 
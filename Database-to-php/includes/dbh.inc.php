<?php
$conn = mysqli_connect("localhost", "root", "", "log_in_system");

    $sql = "SELECT * FROM users;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result); 
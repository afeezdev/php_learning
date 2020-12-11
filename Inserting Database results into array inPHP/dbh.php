<?php
$conn = mysqli_connect( "localhost","root" ,"", "test");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Database connection successful <br>";
}
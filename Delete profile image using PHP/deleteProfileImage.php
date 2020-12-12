<?php
session_start();
include_once 'dbh.php';
$sessionId = $_SESSION['id'];

$fileName = "uploads/profile".$sessionId."*";
$fileinfo = glob($fileName);
$fileExt = explode(".", $fileinfo[0]);
$fileActualExt = $fileExt[1];

$file = "uploads/profile".$sessionId."."."$fileActualExt";

if (!unlink($file)) {
    echo "File was not deleted!";
} else {
    echo "File was deleted";
}

$sql = "UPDATE profile_image SET status=1 WHERE userid='$sessionId';";
mysqli_query($conn, $sql);

header("Location:index.php?deletesuccess");
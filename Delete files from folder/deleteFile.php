<?php

$fileName = $_POST['filename'];

$path = "uploads/".$fileName;
if (!unlink($path)) {
    echo "You have an error!";
} else {
    header("Location: index.php?deletesuccess");
}
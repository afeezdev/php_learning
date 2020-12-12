<?php
session_start();
include_once 'dbh.php';
$id = $_SESSION['id'];

if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    print_r($file);

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileType = $_FILES['file']['type'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 10000000) {
                $fileNameNew = "profile".$id."." . $fileActualExt;
                $fileDestination = 'uploads/'. $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                $sql = "UPDATE profile_image SET status=0 WHERE userid='$id';";
                $result = mysqli_query($conn, $sql);
                header("Location: index.php?uploadsuccess");
            } else {
                echo "Your files is too big!";
            }
        }else {
        echo "There was an error uploading your file!";
            
        }
    }else {
        echo "You can not upload files of this type!";
    }

}
<?php
include_once 'dbh.php';

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$gender = $_POST['gender'];

$sql = "INSERT INTO user (first, last, username, password, gender)
VALUES ('$first', '$last', '$uid', '$pwd', '$gender')";
mysqli_query($conn, $sql);

$sql = "SELECT * FROM user WHERE username ='$uid' AND first='$first'";
$result= mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $userId = $row['id'];
        $gender = $row['gender'];
        $sql = "INSERT INTO profile_image (userid, status, gender) VALUES ('$userId', 1, '$gender')";
        mysqli_query($conn, $sql);
        header("Location: index.php");
    }
} else {
    echo "You have an error!";
}
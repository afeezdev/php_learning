<?php

    include_once './dbh.inc.php';


//PREPARED STATEMENT

    $first = mysqli_real_escape_string($conn,$_POST['first']) ;
    $last = mysqli_real_escape_string($conn,$_POST['last']);
    $email =mysqli_real_escape_string($conn,$_POST['email']);
    $uid = mysqli_real_escape_string($conn,$_POST['uid']);
    $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);

    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) 
    VALUES ( ?, ?, ?, ?, ?);";

$stmt = mysqli_stmt_init($conn);
//Prepare the prepared statement
if (!mysqli_stmt_prepare($stmt,$sql)) {
    echo "SQL error";
}else {
    //Bind parameters to the placeholder
    mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $pwd );
    //Run parameters inside database
    mysqli_stmt_execute($stmt);

     //Created a template
     $sql_user = "SELECT * FROM users WHERE user_first =?;";

     //Create a prepared statement
     $stmt_user = mysqli_stmt_init($conn);
 
     //Prepare the prepared statement
     if (!mysqli_stmt_prepare($stmt_user, $sql_user) || $first === '' ) {
         echo "SQL statement failed";
     }else {
         //Bind parameters to the placeholder
         mysqli_stmt_bind_param($stmt_user, "s", $first);
         //Run parameters inside database
         mysqli_stmt_execute($stmt_user);
         $result = mysqli_stmt_get_result($stmt_user);
         while ($row = mysqli_fetch_assoc($result)) {
             echo "<h5>";
             echo 'You are welcome '.$row['user_first'];
             echo "<hr>";
         }
     
     }
    }

    
// header("Location: ../index.php?signup=success");





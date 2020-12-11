<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prepared statement</title>
</head>
<body>

<?php

$data ="Admin";

$conn = mysqli_connect("localhost", "root", "", "log_in_system");

    //Created a template
    $sql = "SELECT * FROM users WHERE user_uid =?;";

    //Create a prepared statement
    $stmt = mysqli_stmt_init($conn);

    //Prepare the prepared statement
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        echo "SQL statement failed";
    }else {
        //Bind parameters to the placeholder
        mysqli_stmt_bind_param($stmt, "s", $data);
        //Run parameters inside database
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<h5>";
            echo $row['user_uid'];
            echo "<hr>";
        }
    
    }

        
?>    

</body>
</html>
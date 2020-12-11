<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<?php
    $pwd = "test123";
    echo $pwd;
    echo "<br>";
    echo password_hash("test123", PASSWORD_DEFAULT);
    echo "<br>";

    $input = "test123";
    $hashedPwdInDb = password_hash("test123", PASSWORD_DEFAULT);
    echo password_verify($input, $hashedPwdInDb);
?>
    
</body>
</html>
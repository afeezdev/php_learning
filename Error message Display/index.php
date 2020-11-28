<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h2>Sign Up</h2>
    <form action="./includes/signup.inc.php" method="POST">
        <input type="text" name="first" placeholder="Firstname">
        <br>
        <input type="text" name="last" placeholder="Lastname">
        <br>
        <input type="text" name="email" placeholder="E-mail">
        <br>
        <input type="text" name="uid" placeholder="Username">
        <br>
        <input type="password" name="pwd" placeholder="Password">
        <br>
        <button type="submit" name="submit">Sign Up</button>
    </form>
    <?php

        $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        // $fullUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        // $fullUrl = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

        if (strpos($fullUrl, "signup=empty") == true ) {
            echo "<p class='error'>You did not fill in all fields!</p>";
            exit();
        }
        elseif (strpos($fullUrl, "signup=char") == true) {
            echo "<p class='error'>You used invalid characters!</p>";
            exit();
        }
        elseif (strpos($fullUrl, "signup=email") == true) {
            echo "<p class='error'>You used invalid e-mail!</p>";
            exit();
        }
        if (strpos($fullUrl, "signup=success") == true) {
            echo "<p class='success'>You have been signed up!</p>";
            exit();
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h2>Sign Up</h2>
    <form action="./includes/signup.inc.php" method="POST">
        <?php
            if (isset($_GET['first'])) {
                $first = $_GET['first'];
                echo '<input type="text" name="first" placeholder="Firstname" value="'.$first.'"> <br>';
            }else {
                echo '<input type="text" name="first" placeholder="Firstname"> <br>';
            }

            if (isset($_GET['last'])) {
                $last = $_GET['last'];
                echo '<input type="text" name="last" placeholder="Lastname" value="'.$last.'"> <br>';
            }else {
                echo '<input type="text" name="last" placeholder="Lastname"> <br>';
            }
        ?>
        <input type="text" name="email" placeholder="E-mail">
        <br>
        <?php
            if (isset($_GET['uid'])) {
                $uid = $_GET['uid'];
                echo '<input type="text" name="uid" placeholder="username" value="'.$uid.'"> <br>';
            }else {
                echo '<input type="text" name="uid" placeholder="username"> <br>';
            }
        
        ?>

        <input type="password" name="pwd" placeholder="Password">
        <br>
        <button type="submit" name="submit">Sign Up</button>
    </form>
    <?php

        $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        // // $fullUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        // // $fullUrl = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

        // if (strpos($fullUrl, "signup=char") == true) {
        //     echo "<p class='error'>You used invalid characters!</p>";
        //     exit();
        // }
        // elseif (strpos($fullUrl, "signup=email") == true) {
        //     echo "<p class='error'>You used invalid e-mail!</p>";
        //     exit();
        // }
        // elseif (strpos($fullUrl, "signup=success") == true) {
        //     echo "<p class='success'>You have been signed up!</p>";
        //     exit();
        // } else  {
        //     echo "<p class='error'>You did not fill in all fields!</p>";
        //     exit();
        // }

        // Another method that would clear the entire input fields when there is error
        if (!isset($_GET['signup'])) {
            exit();
        } else {
            $signupCheck = $_GET['signup'];

            if ($signupCheck=="char"){
            echo "<p class='error'>You used invalid characters!</p>";
            exit();
            }
            elseif ($signupCheck=="email") {
            echo "<p class='error'>You used invalid e-mail!</p>";
            exit();
        }
        elseif ($signupCheck =="success") {
            echo "<p class='success'>You have been signed up!</p>";
            exit();
        } else  {
            echo "<p class='error'>You did not fill in all fields!</p>";
            exit();
        }
        }

    ?>
</body>
</html>
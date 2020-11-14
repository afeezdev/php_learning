<?php
    include_once './includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./styles/style.css">
    <title>Document</title>
</head>
<body>
<form action="./includes/signup.inc.php" method="POST">
    <input type="text" name="first" placeholder="Firstname">
    <br>
    <input type="text" name="last" placeholder="Lastname">
    <br>
    <input type="email" name="email" placeholder="E-mail">
    <br>
    <input type="text" name="uid" placeholder="Username">
    <br>
    <input type="password" name="pwd" placeholder="Password">
    <br>
    <button type="submit" name="submit">Sign Up</button>
</form>

<div class="testing">
<?php
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<h5>";
        echo $row['user_first'];
        echo "<hr>";
    }
} 
?>
</div>
    
</body>
</html>
<?php
    session_start();
    include_once 'dbh.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $sqlImage = "SELECT * FROM profile_Image WHERE userid ='$id'";
            $resultImage = mysqli_query($conn, $sqlImage);
            while ($rowImage = mysqli_fetch_assoc($resultImage)) {
                echo "<div class='user-container'>";
                    if ($rowImage['status'] == 0 ) {
                        echo "<img src='uploads/profile".$id.".jpg?".mt_rand()."' > ";
                    } else {
                        if ($rowImage['gender'] == 'male' ) {
                            echo "<img src='uploads/profileDefaultMale.jpg' > ";
                        } else {
                            echo "<img src='uploads/profileDefaultFemale.jpg' > ";
                        }
                    }
                echo "<p>".$row['username']."</p>";
                echo "<p>".$row['first']." ". $row['last']."</p> <br><br>";
                
                echo "</div>";
            }
            
        }
    } else {
        
        echo "There are no users yet!";
    }

    if (isset($_SESSION['id'])) {
        if($_SESSION['id'] ==1 ) {
            echo "You are logged in as user Admin <br><br>";
        }
        echo "<form action='upload.php' method='post' enctype='multipart/form-data'>
                <input type='file' name='file'>
                <button type='submit' name='submit'>UPLOAD</button>
              </form>";
        
        
    } else {
        echo "You are not logged in!";
        echo "<form action='signup.php' method='POST'>
                <input type='text' name='first' placeholder='First name'>
                <input type='text' name='last' placeholder='Last name'>
                <input type='text' name='uid' placeholder='Username'>
                <input type='password' name='pwd' placeholder='Password'>
                <br>
                <input type='radio' name='gender' value='male'>
                <label for='male'>Male</label><br>
                <input type='radio' name='gender' value='female'>
                <label for='female'>Female</label><br>
                <button type='submit' name='submitSignup'>Signup</button>
              </form>";
    }

?>
<body>

    <p>Login as User!</p>
    <form action="login.php" method="POST">
        <button type="submit" name="submitLogin">Login</button>
    </form>

    <p>Logout as User!</p>
    <form action="logout.php" method="POST">
        <button type="submit" name="submitLogout">Logout</button>
    </form>
</body>
</html>



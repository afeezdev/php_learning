
    <?php
    include 'header.php';
        $_SESSION['username'] = "danni048";
        echo $_SESSION['username']. "<br>";

        if(!isset($_SESSION['username'])){
            echo "You are not logged in!";
        }else {
            echo "You are not logged in!";
        }
    ?>
</body>
</html>
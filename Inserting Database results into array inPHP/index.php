<?php
    include_once 'dbh.php';
?>

<!DOCTYPE html>
<html >
<head>
    <title></title>
</head>
<body>
<?php
    $sql = "SELECT * FROM data";
    $result = mysqli_query($conn, $sql);
    $datas = array();
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $datas[] = $row;
        }
    }
    // print_r($datas)

    //it will print the first data in the first row
    foreach ($datas[2] as $data) {
        echo $data. "<br>";
    }

    // It will list all the datat in the selected column
    foreach ($datas as $data) {
        echo $data["user_id"]. " ". $data["text"]. "<br>";
    }
 

?>

    
</body>
</html>

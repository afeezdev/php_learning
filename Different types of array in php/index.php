<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // // Indexed arrays
        // $data = array("Daniel", "John", "Jane");
        // echo $data[0];

        // // Associative arrays
        // $data = array("first"=>"Daniel", "last"=>"Nielsen", "age"=> 25);
        // echo $data["first"];

        // $data["middle"] = "Jason";
        
        // Multidimensional arrays
        $data = array(array("Daniel", "Nielsen"), "John", "Jane");
        echo $data[0][1];

    ?>
</body>
</html>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form>
        <input type="text" name="num1" placeholder="Numeber 1">
        <input type="text" name="num2" placeholder="Numeber 2">
        <select name="operator">
            <option>None</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
        </select>
        <br>
        <button type="submit" name="submit" value="submit">Calculate</button>
    </form>

    <h1>The answer is: </h1>
    
    <?php 
        $day_of_the_week = date('w');

        if(isset($_GET['submit'])) {
            $result1 = $_GET['num1'];
            $result2 = $_GET['num2'];
            $operator = $_GET['operator'];
            switch ($operator) {
                case "Add":
                    echo $result1 + $result2;
                    break;
                case "Subtract":
                    echo $result1 - $result2;
                    break;
                case "Multiply":
                    echo $result1 * $result2;
                    break;
                case "Divide":
                    echo $result1 / $result2;
                    break;
                default:
                    echo "Wrong Inputs or Operator";
                    break;
            }
        }
        echo "<br> <hr>";
        switch ($day_of_the_week) {
            case 1:
                echo "<p>It is Monday </p>";
                break;
            case 2 :
                echo "<p>It is Tuesday </p>";
                break;
            case 3 :
                echo "<p>It is Wednesday </p>";
                break;
            case 4:
                echo "<p>It is Thursday </p>";
                break;
            case 5:
                echo "<p>It is Fridayday </p>";
                break;
            case 6:
                echo "<p>It is Saturday </p>";
                break;
            default:
                echo "<p>It is Sunday </p>";
                break;
            }
            
    ?>


</body>
</html>
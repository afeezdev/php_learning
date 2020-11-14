<?php

// // varables
//     $a = 10;
//     $b = 20;
//     $c = 'Hello';

//     //concatenation
//     echo 'Hello Afeez, '. 'How are you ? '.  $c;
    
//     echo"<br> <hr>";

//     echo $a + $b ;

//     echo "<br> <hr>";

//     // conditional statement
//     if($a > $b) {
//         echo "a is greater than b";
//     }
//     elseif ($a == $b) {
//         echo "a is equal to b";
//     }
//     else {
//         echo "b is greater than a";
//     }

//     echo "<br> <hr>";

//     // Index Arrays
//     $index_array = ['a', 'b', 'c', 1, 3];
//     echo $index_array[0];

//     echo "<br> <hr>";
    
//     // Associative Arrays
//     $associative_array = ["pencils" => 4, 4 => "Hello", "erasers" => 2, "colors" => "blue"];
//     echo $associative_array[4];

//     echo "<br> <hr>";
        
//     // for Loops
//     for ($i = 1; $i <= 20 ; $i++) { 
//         echo $i. ' => ';
//     }

//     echo "<br> <hr>";
    
//     // While Loop
//     while ($a <= $b) {
//         echo $a. ' ';
//         $a++;
//     }

//     echo "<br> <hr>";

//     // For each Loop
//     foreach ($associative_array as $key => $value) {
//         echo '<hr>';
//         echo $key . ' => '. $value. '<br>' ;
//         echo '<br>';
//         echo 'keys ' .$key;
//         echo '<br>';
//         echo 'value '.$value;
//         echo '<br>';
//     }    

// Function
function hello() {
    echo "Hey, this is Afeez";
}
hello();

echo "<br> <hr>";
 
if(isset($_REQUEST['username'])){
    echo "Hello ". $_REQUEST['username'];
}
    


?>
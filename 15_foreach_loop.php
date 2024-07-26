<?php
echo "foreach loop in php  <br>";
$colors = array("red", "green", "blue", "yellow");
echo var_dump($colors);

// using for loop
// for ($i=0; $i <count($colors) ; $i++) { 
//     # code...
//     echo "the color is".$colors[$i]."<br>";
// }

// using for each loop
// foreach ($colors as $color) {
//     echo "Color: $color <br>";
// }

//using foreach loop
foreach ($colors as $key =>  $value) {
    echo "  key is $key Color: $value <br>";
    # code...
}

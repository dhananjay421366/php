<?php
echo "associate arrays in php <br>";

// $arr = array('dhanu','pratap','vaishnav');

// // print the first element
//  echo $arr[0];
//  echo "<br>";
//  // print the last element  
//  echo $arr[2];


$favCol = array('dhanu' => 'red', 'pratap' => 'yellow', 'vaishnava' => 'pink', 8 => 'this');
//key  =>  value format;
// // print the first element
//  echo $favCol['dhanu'];
//  echo "<br>";
//  // print the last element
//  echo $favCol['vaishnava'];
//  echo "<br>";
//  // print the element with key 8
//  echo $favCol[8];
//  echo "<br>";
// print all elements
foreach ($favCol as $key => $value) {
    # code...
    echo " <br>Favorite color of $key is $value";
}

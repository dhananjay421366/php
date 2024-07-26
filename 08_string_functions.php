<?php

// string functions in php

$name = "Dhanu  is an good boy";
// return length of string 
echo strlen($name);
echo "<br>";

// convert the given string into uppecase 
echo strtoupper($name);

echo "<br>";

// convert the given string into lowercase 
echo strtolower($name);

echo "<br>";

// this funtion is replace the an to A in my $name string
echo str_replace("an", "A", $name);

echo "<br>";

// this function can be repeate a string in given no
echo str_repeat("Hello ", 3);

echo "<br>";

// this can be show position of given words and retern index
echo strpos($name, "is");

echo "<br>";

//Returns the portion of string specified by the offset and length parameters.
echo substr($name, 0, 6);
echo "<br>";

// string convert into array
echo var_dump(str_split($name));

echo "<br>";
// revers the string 
echo strrev($name);

<?php

echo "scope in variables <br>";
$a = 98;  // global variable in php 
$b = 10;  // global variable in php 
$a = 1232;  // global variable in php 
 $c = 0;
function printvalue()
{
    //$a = 90;  // local variable in php
    global $a, $b, $c; // we can using global keyword we can access a global variables
    echo $a . "<br>"; // 1232
    echo $b . "<br>"; //10
    $a = 1000;
    $b = 2000;
}
echo $a . "<br>"; // 1232
echo $b . "<br>"; // 10

printvalue();   // after access global variables we can changes the value of this variables

echo $a . "<br>"; // 1000
echo $b . "<br>"; // 2000

echo var_dump($GLOBALS);

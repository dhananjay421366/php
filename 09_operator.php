<?php
// operators in php 
/* 1. Arithmetice Operators
   2. Assignment Operators
   3. Comparison Operators
   4. Logical Operators
   */
//  1. Arithmetice Operators
$a = 45;
$b = 8;
echo "when a+b ,the result is " . $a + $b . "<br>";
echo "when a-b ,the result is " . $a - $b . "<br>";
echo "when a*b ,the result is " . $a * $b . "<br>";
echo "when a/b ,the result is " . $a / $b . "<br>";
echo "when a%b ,the result is " . $a % $b . "<br>";
echo "when a**b ,the result is " . $a ** $b . "<br>";

// 2. Assignment Operators
// = += -= *= /= %=

// 3. Comparison Operators
// == > <  not equal to <> 

// check a==b hai kya 
echo "when a==b ,the result is ";
echo var_dump($a == $b);
echo "<br>";

// check a not equal to b hai kya
echo "when a==b ,the result is ";
echo var_dump($a <> $b);
echo "<br>";

//    4. Logical Operators
$m = true;
$n = false;
// and  && or  || not !

// AND &&
echo "when m&&n ,the result is ";
echo var_dump($m && $n);
echo "<br>";
// OR ||
echo "when m||n ,the result is ";
echo var_dump($m || $n);
echo "<br>";

// Not !    convert true ko false or false ko true karta hai;  toggel value
echo "when !m ,the result is ";
echo var_dump(!$m);
echo "<br>";
echo "when !n ,the result is ";
echo var_dump(!$n);
echo "<br>";

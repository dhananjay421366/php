<?php
// String
// Integer 
// Float
// object
// Array
// NULL

// String -> sequence of characters

$name = "Dhanu";
echo $name; // Dhanu
echo "<br>"; // new line

// Integer -> Non decimal number

$age = 25;
echo $age; // 25
echo "<br>"; // new line

// Float -> Decimal number

$weight = 70.5;
echo $weight; // 70.5
echo "<br>"; // new line

// Object -> instance of a class
class Person
{
    public $name;
    public $age;
    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

$person = new Person("jaan", 25);
echo var_dump($person); // object(person)#1 (2) { ["name"]=> string(5) "Dhanu" ["age"]=> int(25) }
echo "<br>"; // new line
echo $person->name; // Dhanu
echo "<br>"; // new line

echo var_dump($person->name); // Dhanu
echo "<br>"; // new line
echo var_dump($person->age); // Dhanu
echo "<br>"; // new line

// Array -> collection of elements

$numbers = [1, 2, 3, 4, 5];
echo var_dump($numbers); // 1
echo $numbers[0]; // 1
echo "<br>"; // new line

// NULL -> absence of a value

$var = null;
echo var_dump($var); // null
echo "<br>"; // new line

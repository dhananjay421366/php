<?php
echo "welcome to php functions <br>";
function processMarks($marksArr)
{
    $total = 0;
    foreach ($marksArr as $marks) {
        $total += $marks;
    }
    echo $total . "<br>";
    $average = $total / count($marksArr);
    echo count($marksArr) . "<br>";
    return $average;
}

$rohan = [34, 98, 45, 12, 98, 93];
$sum = processMarks($rohan);
echo "the total marks out of 600 is $sum";

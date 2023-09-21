<?php
$numbers = [-10, 2, 3, 4, -10, -10, -10, 0, -10];

function sumOfNums($numbers)
{
    $negativeSum = 0;
    for ($i = 0; $i <= count($numbers); $i++) {
        if ($numbers[$i] < 0) {
            $negativeSum += $numbers[$i];
        }

    }
    return $negativeSum;
}

echo sumOfNums($numbers);
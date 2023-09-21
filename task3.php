<?php
function isPerfect($number)
{
    $result = 0;
    for ($i = 2; $i <= sqrt($number); $i++) {
        if (!($number % $i)) {
            $result += $i;
            if ($i != $number / $i) $result += $number / $i;
        }
    }

    if (++$result == $number) {
        return 'Совершенное';
    } else {
        return 'Не совершенное';
    }
}

$number = 46;
echo isPerfect($number);



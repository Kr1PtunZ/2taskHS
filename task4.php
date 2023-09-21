<?php

function isLucky($ticketNumber)
{
    $firstNums = substr($ticketNumber, 0, 3);
    $lastNums = substr($ticketNumber, -3);
    $sumLast = 0;
    $sumFirst = 0;

    for ($i = 0; $i < strlen($firstNums); $i++) {
        $sumFirst += $firstNums[$i];
    }

    for ($j = 0; $j < strlen($lastNums); $j++) {
        $sumLast += $lastNums[$j];
    }

    if ($sumFirst == $sumLast) {
        return 'true';
    } else {
        return 'false';
    }

}

echo isLucky('221005');
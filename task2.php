<?php

function isBalanced($str)
{
    $stack = [];
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] === '(') {
            array_push($stack, $str[$i]);
        } else if ($str[$i] === ')') {
            if (count($stack) === 0) {
                return false;
            } else {
                array_pop($stack);
            }
        }
    }
    $result = count($stack) === 0;

    if ($result) {
        return 'Сбалансированы';
    } else {
        return 'Не сбалансированы';
    }

}

echo(isBalanced("()()("));
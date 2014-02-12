<?php

function sumdigits($number) {
    $number = abs($number);
    if ($number < 10)
        return $number;
    else
        return $number % 10 + sumdigits(intval($number / 10));
}

if (isset($argv[1])) {
    echo sumdigits(intval($argv[1]));
}
elseif (isset($_GET['q'])) {
    echo sumdigits(intval($_GET['q']));
}
else {
    die('Invalid input');
}

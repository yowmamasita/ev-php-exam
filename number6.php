<?php

function separateList($intarray) {
    $even = [];
    $odd = [];
    foreach ($intarray as $x) {
        if ($x % 2 == 0) {
            $even[] = $x;
        }
        else {
            $odd[] = $x;
        }
    }
    return ['even' => $even, 'odd' => $odd];
}

if (isset($argv[1])) {
    $intarray = array_map('intval', explode(",", $argv[1]));
}
elseif (isset($_GET['q'])) {
    $intarray = array_map('intval', explode(",", $_GET['q']));
}
else die('Invalid input');

var_dump(separateList($intarray));

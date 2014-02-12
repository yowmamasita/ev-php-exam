<?php

function nOccurence(&$intarray, $key) {
    $m = array_shift($intarray);
    if (empty($m)) return 0;
    return ($m == $key ? 1 : 0) + nOccurence($intarray, $key);
}

if (isset($argv[1])) {
    $intarray = array_map('intval', explode(",", $argv[1]));
    if (isset($argv[2])) {
        $key = intval($argv[2]);
    }
    else die('Invalid input');
}
elseif (isset($_GET['q'])) {
    $intarray = array_map('intval', explode(",", $_GET['q']));
    if (isset($_GET['r'])) {
        $key = intval($_GET['r']);
    }
    else die('Invalid input');
}
else die('Invalid input');

echo nOccurence($intarray, $key);

<?php

if (isset($argv[1])) {
    $intarray = array_map('intval', explode(",", $argv[1]));
}
elseif (isset($_GET['q'])) {
    $intarray = array_map('intval', explode(",", $_GET['q']));
}
else die('Invalid input');

echo max($intarray);

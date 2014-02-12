<?php

if (isset($argv[1])) {
    $intarray = array_map('intval', file($argv[1], FILE_IGNORE_NEW_LINES));
}
else {
    die('Invalid input');
}

echo array_sum($intarray);

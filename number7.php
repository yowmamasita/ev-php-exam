<?php

function next_palindrome($number) {
    $number = abs($number);
    $s = strval($number + 1);// strictly greater than n, special case: 9's fix
    $len = strlen($s);
    $a = strrev(substr($s, 0, intval($len/2)));
    $b = substr($s, intval(($len+1)/2));
    if (intval($a) < intval($b)) {
        $c = strval(intval(substr($s, 0, intval(($len+1)/2))+1));
    }
    else {
        $c = substr($s, 0, intval(($len+1)/2));
    }
    return intval($c . strrev(substr($c, 0, intval($len/2))));
}

if (isset($argv[1])) {
    echo next_palindrome(intval($argv[1]));
}
elseif (isset($_GET['q'])) {
    echo next_palindrome(intval($_GET['q']));
}
else {
    die('Invalid input');
}

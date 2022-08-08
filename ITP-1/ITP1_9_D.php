<?php
$str = trim(fgets(STDIN));
$q = trim(fgets(STDIN));
for ($i=0; $i<$q; $i++) {
    list($input, $a, $b) = explode(" ", trim(fgets(STDIN)), 3);
    if ($input == 'print') {
        echo substr($str, $a, $b - $a + 1).PHP_EOL;
    } elseif ($input == 'reverse') {
        $str = substr($str, 0, $a) .
        strrev(substr($str, $a, $b - $a + 1)) . substr($str, $b + 1);
    } elseif ($input == 'replace') {
        list($b, $c) = explode(" ", $b);
        $str = substr_replace($str, $c, $a, $b - $a + 1);
    }
}
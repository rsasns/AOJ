<?php

$n = fgets(STDIN);
$array = explode(" ", trim(fgets(STDIN)));
$array = array_reverse($array);
echo implode(" ", $array).PHP_EOL;
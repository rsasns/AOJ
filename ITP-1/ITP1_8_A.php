<?php
$str = trim(fgets(STDIN));

$array = str_split($str);
for ($i=0; $i<count($array); $i++) {
    if (ctype_lower($array[$i])) {
        $array[$i] = strtoupper($array[$i]);
    } else {
        $array[$i] = strtolower($array[$i]);
    }
}
echo implode("",$array).PHP_EOL;
<?php
$w = trim(fgets(STDIN));

$cnt = 0;
while(($input = trim(fgets(STDIN))) != "END_OF_TEXT") {
    $t = explode(" ", $input);
    for ($i=0; $i<count($t); $i++) {
        $t[$i] = strtolower($t[$i]);
        if ($t[$i] === $w) $cnt++;
    }
}
echo $cnt.PHP_EOL;
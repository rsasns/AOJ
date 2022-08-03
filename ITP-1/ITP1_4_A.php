<?php
list($a, $b) = explode(" ", trim(fgets(STDIN)));

(int)$d = floor($a / $b);
(int)$r = $a % $b;
(float)$f = $a / $b;

echo $d." ".$r." ".number_format($f, 5, '.', '').PHP_EOL;
<?php
list($a, $b, $c) = explode(" ", trim(fgets(STDIN)));

$cnt=0;
for ($i=$a; $i<=$b; $i++) {
    if ($c % $i == 0) $cnt++;
}

echo $cnt.PHP_EOL;

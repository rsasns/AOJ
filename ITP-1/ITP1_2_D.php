<?php
list($W, $H, $x, $y, $r) = explode(" ", trim(fgets(STDIN)));

if ($x-$r<0 || $x+$r>$W) {
    print("No".PHP_EOL);
} elseif ($y-$r<0 || $y+$r>$H) {
    print("No".PHP_EOL); 
} else{
    print("Yes".PHP_EOL); 
}
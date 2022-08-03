<?php
fscanf(STDIN,"%d %d",$a,$b);

if ($a > $b) {
    echo "a > b" . "\n";
} elseif ($a < $b) {
    echo "a < b" . "\n";
} else {
    echo "a == b" . "\n";
}
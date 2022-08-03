<?php
fscanf(STDIN,"%d %d %d",$a,$b,$c);

if ($a < $b && $b < $c) {
    echo "Yes" . "\n";
} else {
    echo "No" . "\n";
}
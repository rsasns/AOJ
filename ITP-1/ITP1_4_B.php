<?php
$r = trim(fgets(STDIN));

$a = ($r*$r)*pi();
$b = ($r*2)*pi();

printf("%.6f %.6f\n", $a, $b);
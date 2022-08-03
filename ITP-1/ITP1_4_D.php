<?php
$n = fgets(STDIN);
$array = explode(" ", trim(fgets(STDIN)));
printf("%d %d %d\n", min($array), max($array), array_sum($array));
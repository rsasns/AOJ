<?php
$array = explode(" ", trim(fgets(STDIN)));
sort($array);
print(implode(" ", $array)."\n");
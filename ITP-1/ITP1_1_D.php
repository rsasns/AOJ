<?php
$seconds = intval(trim(fgets(STDIN)));

$hours = floor($seconds / 3600);
$minutes = floor(($seconds / 60) % 60);
$seconds = $seconds % 60;

printf("%d:%d:%d\n", $hours, $minutes, $seconds);
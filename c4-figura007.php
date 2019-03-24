<?php
$x = 15;
settype($x, 'double');
$y = 25.3;
settype($y, 'integer');

print is_float($x) . "<br>";
print is_int($y) . "<br>";

$z = 'Tenho uma gata branca!';
print is_string($z) . "<br>";
print is_bool($z) . "<br>";
?>
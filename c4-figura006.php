<?php
$x = 15;
settype($x, 'double');
$y = 25.3;
settype($y, 'integer');
$z = "boa noite";
settype($z, 'string');
$w = 0;
settype($w, 'boolean');

print gettype($x) . "<br>";
print gettype($y) . "<br>";
print gettype($z) . "<br>";
print gettype($w) . "<br>";

$comp = ($x + $y);
print gettype($comp) . "<br>";
?>
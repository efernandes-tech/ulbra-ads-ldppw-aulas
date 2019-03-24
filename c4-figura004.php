<?php
$varX = 15;
$varX = (int) $varX;
echo $varX . "<br>";

$varAB = 3.9;
$varAB = (float) $varAB;
echo $varAB . "<br>";

$outra = 20;
$outra = (real) $outra;
echo $outra . "<br>";

$nova = 7.6;
$nova = (integer) $nova;
echo $nova . "<br>";

$a = 12;
$b = 13.35;
$c = (integer) ($a + $b * 1.15);
$d = (double) ($a + $b * 1.15);
$e = (boolean) ($a + $b * 1.15);
echo $c . "<br>" . $d . "<br>" . $e . "<br>";
?>
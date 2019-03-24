<?php
// array(0,1,2,3,4,5,6,7,8,9,10,11,12)
foreach (range(0, 12) as $numero) {
	echo $numero . " ";
}
echo "<p>";
$numero = range(0, 12);
shuffle($numero);
foreach ($numero as $muda_numero) {
	echo "$muda_numero ";
}
echo "<p>";
// array(0,10,20,30,40,50,60,70,80,90,100)
foreach (range(0, 100, 10) as $numero_r) {
	echo $numero_r . " ";
}
echo "<p>";
foreach (range('a', 'i') as $letra) {
	echo $letra . " ";
}
echo "<p>";
$letra = range('a', 'i');
shuffle($letra);
foreach ($letra as $muda_letra) {
	echo "$muda_letra ";
}
?>
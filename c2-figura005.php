<?php
$estados = array("PR", "SP", "RJ");
foreach ($estados as $elem) {
	echo "<br>Elemento do array original: $elem";
}
array_unshift($estados, "RS", "SC");
foreach ($estados as $elem) {
	echo "<br>Elemento do array adicionado: $elem";
}
?>
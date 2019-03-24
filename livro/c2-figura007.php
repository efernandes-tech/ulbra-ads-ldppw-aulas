<?php
$estados = array("RS", "SC", "PR", "SP", "RJ");
foreach ($estados as $elem) {
	echo "<br>Elemento do array original: $elem";
}
array_shift($estados);
foreach ($estados as $elem) {
	echo "<br>Elemento do array adicionado: $elem";
}
?>
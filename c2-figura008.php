<?php
$semana = array("segunda", "terça", "quarta", "quinta", "sexta", "sábado", "domingo");
foreach ($semana as $elem) {
	echo "<br>Elemento do array original: $elem";
}
array_pop($semana);
foreach ($semana as $elem) {
	echo "<br>Elemento do array adicionado: $elem";
}
?>
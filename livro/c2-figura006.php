<?php
$semana = array("segunda", "terça", "quarta", "quinta", "sexta");
foreach ($semana as $elem) {
	echo "<br>Elemento do array original: $elem";
}
array_push($semana, "sábado", "domingo");
foreach ($semana as $elem) {
	echo "<br>Elemento do array adicionado: $elem";
}
?>
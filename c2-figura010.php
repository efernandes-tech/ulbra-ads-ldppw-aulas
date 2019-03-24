<?php
$nomes = array("nome 5" => "Walace", "nome 3" => "Mara", "nome 1" => "Carol", "nome 4" => "Isabel");
foreach ($nomes as $elem) {
	echo "<br>Elemento do array original: $elem";
}
rsort($nomes);
foreach ($nomes as $elem) {
	echo "<br>Elemento do array adicionado: $elem";
}
?>
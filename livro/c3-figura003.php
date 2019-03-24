<?php
function minha_funca() {
	for ($i = 0; $i < 5; $i++) {
		echo "O quadrado de " . $i . " é " . ($i * $i) . ".<br>";
	}
	// print $x; // linha invalida.
}
$x = 10;
echo "Resultado da execução da função: <p>";
minha_funca();
echo "<hr>";
?>
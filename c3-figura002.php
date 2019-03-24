<?php
function minha_funca() {
	for ($i = 0; $i < 5; $i++) {
		echo "O quadrado de " . $i . " é " . ($i * $i) . ".<br>";
	}
}
echo "Resultado da execução da função: <p>";
minha_funca();
echo "<hr>";
// print $i; // linha invalida.
?>
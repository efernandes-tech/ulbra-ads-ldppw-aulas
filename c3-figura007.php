<?php
function saida($texto, $vezes = 1) {
	for ($i = 0; $i < $vezes; $i++) {
		print $texto;
	}
}
saida("1) Exemplo da função <p>");
saida("2) Outro exemplo da função - duas vezes <br>", 2);
?>
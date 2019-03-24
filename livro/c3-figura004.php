<?php
function dobro($base) {
	$dobro = ($base * 2);
	return $dobro;
}
$valor = 32;
$x = dobro($valor);
print("<font size='5'>O dobro de $valor é: $x</font><br>");
?>
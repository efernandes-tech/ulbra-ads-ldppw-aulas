<?php
function soma1($oper) {
	$soma = 0;
	for ($i = 0; $i < sizeof($oper); $i++) {
		$soma += $oper[$i];
		$oper[$i] = 0;
	}
	return $soma;
}
$oper = array(10, 15, 2, 25, 37);
print("<p>" . soma1($oper) . "<br>");
print($oper[2]); // 2
?>
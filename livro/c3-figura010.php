<?php
function soma2(&$oper) // ponteiro
{
	$soma = 0;
	for ($i = 0; $i < sizeof($oper); $i++) {
		$soma += $oper[$i];
		$oper[$i] = 0;
	}
	return $soma;
}
$oper = array(10, 15, 2, 25, 37);
print("<p>" . soma2($oper) . "<br>");
print($oper[2]); // 0
?>
<?php
function fatorial($n) {
	if ($n < 0) {return -1;}
	if ($n <= 1) {return 1;}
	return ($n * fatorial($n - 1)); // chamada recursiva
}

function mostra_fatorial($num) {
	print("<p>O fatorial de $num é: " . fatorial($num));
	print("<br>");
}

mostra_fatorial(2);
mostra_fatorial(10);
?>
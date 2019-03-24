<?php
$var = '';
if (isset($var)) {
	echo "Essa variável existe. <br>";
}

$a = "teste";
$b = "outroteste";

var_dump(isset($a));
var_dump(isset($a, $b));

unset($a);

var_dump(isset($a));
var_dump(isset($a, $b));

$f = NULL;
var_dump(isset($f));
?>
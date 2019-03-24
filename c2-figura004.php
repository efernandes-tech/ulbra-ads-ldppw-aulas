<?php
$var_array = array(0 => 'um', 1 => 'dois', 2 => 'três');
foreach ($var_array as $elem) {
	echo "<br>Elemento do array original: $elem";
}
unset($var_array[1]);
foreach ($var_array as $elem) {
	echo "<br>Elemento do array eliminado: $elem";
}
?>
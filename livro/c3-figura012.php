<?php
function dados() {
	$a = "Joana";
	$b = "joana@bol.com.br";
	return array($a, $b);
}
list($nome, $email) = dados();
echo "$nome - $email";
?>
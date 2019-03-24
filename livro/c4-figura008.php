<form action="" method="post">
    Valor 1: <input type="text" name="a" size="5"><br>
    Valor 2: <input type="text" name="b" size="5"><br>
    <input type="submit" value="Multiplicar">
    <input type="reset" value="Limpar">
</form>
<?php
if ($_POST) {
	$v1 = $_POST['a'];
	$v2 = $_POST['b'];
	if (is_numeric($v1) AND is_numeric($v2)) {
		$res = $v1 * $v2;
		print("A multiplicação resultou em: $res");
	} else {
		print("Valor(es) inválido(s); digite outro(s)!");
	}
}
?>
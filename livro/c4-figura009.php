<form action="" method="post">
    Usuário: <input type="text" name="login" size="10"><br>
    Senha: <input type="text" name="pass" size="10"><br>
    <input type="submit" value="Acessar">
    <input type="reset" value="Limpar">
</form>
<?php
if ($_POST) {
	$login = $_POST['login'];
	$pass = $_POST['pass'];
	if (!empty($login) OR !empty($pass)) {
		print("Preencha usuário/senha para acessar o sistema!");
	} else {
		print("Acesso ao sistema com êxito!");
	}
}
?>
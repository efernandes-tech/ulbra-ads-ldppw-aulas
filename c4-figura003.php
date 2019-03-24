<?php
$nome = $_GET['nome'];
$idade = $_GET['idade'];
if ($nome == "" OR $idade == "") {
	print("Valor(es) em branco; preencha, por favor!");
} else {
	print("Seja bem-vindo <font color='green'> $nome </font>!");
	print("<br> Você tem <font color='gold'> $idade </font> anos!");
}
?>
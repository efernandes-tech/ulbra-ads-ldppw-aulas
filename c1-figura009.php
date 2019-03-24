<?php
print("<h2>Exemplo de operadores lógicos</h2>");
$a = 10;
$b = 2.5;
$and = ($a > 0) AND ($b < 10); // ou $and = ($a > 0) && ($b < 10);
$or = ($a == 0) OR ($b > 0); // ou $or = ($a == 0) || ($b > 0);
$xor = ($a < 20) XOR ($b == 10); // ou exclusivo
$negacao = ! ($a != 10);
print("AND: $and <br> OR: $or <br> XOR: $xor <br> Negação: $negacao");
?>
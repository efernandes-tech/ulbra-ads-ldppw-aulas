<?php
print("<h2>Exemplo de operadores relacionais</h2>");
$a = 10;
$b = 5;
$igual = ($a == 10);
$diferente = ($b != 0); // ou $diferente = ($b <> 0);
$menor = ($a < 15);
$maior = ($b > 1);
$menor_igual = ($b <= 5);
$maior_igual = ($a >= 10);
print("IGUAL: $igual <br> DIFERENTE: $diferente <br> MENOR: $menor <br> MAIOR: $maior
        <br> MENOR OU IGUAL: $menor_igual <br> MAIOR OU IGUAL: $maior_igual");
?>
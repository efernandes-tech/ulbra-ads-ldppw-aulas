<?php
print("<h2>Exemplo de operadores aritméticos</h2>");
$a = 10;
$b = 2.5;
$x = "Seja ";
$y = "bem vindo!";
$soma = $a + $b;
$subtracao = $a - $b;
$multiplicacao = $a * $b;
$divisao = $a / $b;
$modulo = $a % $b; // retorna o resto da divisão inteira
$concatenacao = $x . $y; // junta o conteúdo de $y após o conteúdo de $x
$a++;
$b--;
print("Soma: $soma <br> Subtração: $subtracao <br> Multiplicação: $multiplicacao
        <br> Divisão: $divisao <br> Módulo: $modulo <br> Concatenação: $concatenacao");
print("<br> Incremento: $a <br> Decremento: $b");
?>
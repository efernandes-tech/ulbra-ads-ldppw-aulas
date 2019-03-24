<?php
print("<h2>Exemplos de variáveis e constantes</h2>");
$b = 17;
$c = 7.5;
$d = "Texto!";
print("Variável b: $b <br> Variável c: $c <br> Variável d: $d");
define("VAR1", "Olá!");
define("VAR2", 55.76);
define("IDADE", 18);
echo "<p>Constantes VAR1: ".VAR1;
echo "<br>Constantes VAR2: ".VAR2."<br>Constantes IDADE: ".IDADE;
// Comentário em PHP - para 1 linha
/*
também pode ser assim - para mais de uma linha
*/
?>
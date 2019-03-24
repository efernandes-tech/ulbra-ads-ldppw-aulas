<?php
$a = 10;
$b = 5;
$oper = 3;
switch ($oper) {
    case 1:
        $soma = ($a + $b);
        print("<p>".$soma);
        break;
    case 2:
        $subtr = ($a - $b);
        print("<p>".$subtr);
        break;
    case 3:
        $multip = ($a * $b);
        print("<p>".$multip);
        break;
    case 4:
        $divid = ($a / $b);
        print("<p>".$divid);
        break;
    default:
        print("<p>Escolha uma operação!");
        break;
}
$letra = "xy";
switch ($letra) {
    case 'a':
        print("<p>Você escolheu a letra 'a' !");
        break;
    case 'b':
    case 'B':
        print("<p>Você escolheu a letra 'b' o 'B' !");
        break;
    case 'C':
        print("<p>Você escolheu a letra 'C' !");
        break;
    case 'xy':
        print("<p>Você escolheu a expressão 'xy' !");
        break;
    default:
        print("<p>Escolha uma das letras !");
        break;
}
?>
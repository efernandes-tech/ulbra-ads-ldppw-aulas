<?php
$m = 20;
print("<p>");
do {
    print("Valor de m: $m <br>");
    $m--;
} while ($m >= 10);
$i = 1;
print("<p>");
do {
    $a = rand(0, 50);
    if ($a == 23)
        break;
    print("O número randômico gerado é: $a");
    print("<br>Esta é a iteração $i do loop. <p>");
    $i++;
} while ($i < 10);
?>
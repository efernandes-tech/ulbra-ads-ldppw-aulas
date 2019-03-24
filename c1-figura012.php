<?php
$j = 1;
print("<p>");
while ($j <= 5) {
    print("Esta é a iteração $j do loop. <br>");
    $j++;
}
$k = 0;
print("<p>");
while ($k <= 10) {
    $k++;
    if ($k % 2)
        continue;
    print("Este é o valor de k: $k <br>");
}
?>
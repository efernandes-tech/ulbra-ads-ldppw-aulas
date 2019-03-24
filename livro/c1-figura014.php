<?php
print("<p>Contagem regressiva...<br>");
for ($x = 10; $x >= 0; $x--) {
    print "$x ";
}
print("<p>Milhas por quilômetros:");
for ($km=1; $km <= 5; $km++) {
    $mi = $km * 0.62140;
    print "<br>$km quilômetro(s) = $mi milhas";
}
?>
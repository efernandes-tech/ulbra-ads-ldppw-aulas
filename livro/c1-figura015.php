<?php
echo "<p>Elementos de array: <br>";
$var_array = array(1, 2, 3, 4);
foreach ($var_array as $elem) {
    $valor = $elem * 2;
    echo "Dobro do valor do elemento : $valor <br>";
}
echo "<p>";
$bidimensao = array();
$bidimensao[0][0] = "L";
$bidimensao[0][1] = "e";
$bidimensao[0][2] = "g";
$bidimensao[1][0] = "a";
$bidimensao[1][1] = "l";
$bidimensao[1][2] = "!";
foreach ($bidimensao as $v1) {
    foreach ($v1 as $v2) {
        echo "$v2\n";
    }
}
?>
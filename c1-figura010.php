<?php
$estoque = 65;
if ($estoque == 80) {
    print("O estoque está muito alto.");
} elseif ($estoque >= 70 AND $estoque < 80) {
    print("O estoque está alto.");
} elseif ($estoque >= 50 AND $estoque < 70) {
    print("O estoque está acima da média.");
} elseif ($estoque >= 20 AND $estoque < 50) {
    print("O estoque está normal.");
} else {
    print("O estoque está abaixo do mínimo.");
}
?>
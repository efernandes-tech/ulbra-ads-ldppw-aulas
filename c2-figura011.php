<?php
$nomes = array("Walace", "Mara", "Carol", "Isabel", "André");
$achou1 = array_search("André", $nomes);
$achou2 = array_search("André", $nomes);
$achou3 = array_search(5, $nomes);
print("<p>A primeira procura retornou $achou1;
        a segunda procura retornou $achou2;
        a terceira procura retornou $achou3;");
?>
<?php
$comidas = array(
	'frutas' => array('laranja', 'banana', 'maçã'),
	'vegetais' => array('cenoura', 'couve', 'ervilha'),
);
// contagem recursiva
echo count($comidas, COUNT_RECURSIVE) . "<br>"; // 8
// contagem normal
echo count($comidas) . "<br>"; // 2
$_array = array(2, 7, "a" => array(5, 8, 9), "b", 13, 17);
echo count($_array) . "<br>";
echo count($_array, COUNT_RECURSIVE);
?>
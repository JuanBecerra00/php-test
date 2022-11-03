<?php
echo '<h1>1. PHP tiene tipos de datos dinamicos</h1>';
$var1 = 1;
$var1 = 'Juanes';

//PHP soporta los siguientes tipos de datos
//bool   (true/false)
$completado = true;
//int    (Numeros enteros)
$edad = 18;
//float  (Numeros con decimales)
$nota = 4.5;
//String (Texto)
$nombre = 'Esteban';

echo $completado.'<br>';
echo $edad. '<br>';
echo $nota. '<br>';
echo $nombre. '<br>';

//Se puede saber el tipo de valor de una variable de la siguiente manera
echo gettype($completado).'<br>';
var_dump($nota);
echo '<br>';



echo '<h1>2. Tipos de datos compuestos</h1>';
//array
$numeros = [1, 2, 3.5, 'cuatro', false];
print_r($numeros);
print '<br>';
print $numeros[2];


//object
//callable
//iterable

//3. Tipos de datos especiales
//resource
//null


echo '<h1>Coherencia de variables</h1>';
$stringnum = '10';
var_dump($stringnum);
echo '<br>';
echo $stringnum+2 . '<br>';

//Se puede hacer que los tipos de datos sean estrictos escribiendo la siguiente linea
//declare(strict_types=1);

echo '<h1>Castear variables</h1>';
//castear variables
$x=(int)'5';
var_dump($x);
?>
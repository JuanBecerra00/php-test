<?php
echo '<h1>Enteros</h1>';
//PHP_INT_MIN
//PHP_INT_MAX

//Se puede escribir su valor en HEX
$x = 0x2A;
echo $x.'<br>';

//Se puede escribir su valor en octonales
$y = 055;
echo $y.'<br>';

//Se puede escribir su valor en binario
$z = 0b101;
echo $z.'<br>';

//Al castear de un float a int se pierden los decimales (redondea hacia abajo)
$a = (int) 17.99;
echo $a.'<br>';

//Al castear de un string a int se el valor sera 0
$b = (int) 'Hola';
echo $b.'<br>';

//Se puede saber si una variable es un enteero usando la siguiente funcion
echo is_int($b) . '<br>';

//Se pueden poner _ para hacer el numero mas comprensible
$c = 200_000;
echo $c.'<br>';

?>
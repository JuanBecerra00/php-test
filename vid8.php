<?php
echo '<h1>Floats</h1>';
//Si a un float se le realiza una operacion, aqunque no tenga decimales seguira siendo float
$x = 1.5e2;
echo $x .'<br>';
var_dump($x);
echo '<br>';

$y = 1.7*10;
echo $y .'<br>';
var_dump($y);
echo '<br>';

//Se puede aproximar hacia abajo usando floor
$z = floor(4.5);
echo $z .'<br>';
var_dump($z);
echo '<br>';

//Se puede aproximar hacia arriba usando ceil
$z = ceil(4.5);
echo $z .'<br>';
var_dump($z);
echo '<br>';

//No debemos confiarnos de los floats
$a = 0.23;
$b = 1 - 0.77;
if ($a == $b) {
    echo 'Son iguales<br>';
}else{
    echo 'No son iguales<br>';
}

//Si un numero es muy grande se representa como infinito
echo INF . '<br>';
var_dump(INF);
echo '<br>';
?>
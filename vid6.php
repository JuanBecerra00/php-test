<?php
echo '<h1>Booleans</h1>';
//sus valores pueden ser true o false
//int 0 = false
//float 0.0 = false
//str '' = false
//[] = false
//null = false

//En los if el booleano funciona de la siguiente manera

if (true) {
    //hacer algo
};

//ej

$array1 = [];

if ($array1) {
echo 'verdadero <br>';
}else{
    echo 'Falso <br>';
};

//Al momento de imprimir booleans si el valor es true se mostrara un 1, en caso de ser falso no se mostrara nada
//ej
$si = true;
$no = false;
echo $si;
echo $no;
?>
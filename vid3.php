<?php

//Se pueden usar print y echo para mostrar informacion
echo 'Texto<br>';
print 'Texto<br>';



//Se pueden concadenar elementos para ser mostrados con , y .(No se puede hacer con print)
echo 'a','b','c', '<br>';

//Definir variables
$nombre = 'Juan';
echo 'Hola '. $nombre, '<br>';

//Si una variable tiene como valor otra variable este por si solo no se actualizara

$a = 1;
$b = $a;
$a = 2;

echo $b, '<br>';

//Para que se actualize se debe añadir el caracter &

$x = 1;
$y = &$x;
$x = 2;

echo $y, '<br>';
?>

<!-- Se pueden añadir elementos de php dentro de HTML -->

<h1>    <?php echo 'Titulo' ?>      </h1>

<!-- Asi se puede hacer de una forma mas corta -->
<h1>    <?= 'Titulo' ?>     </h1> <!-- Es lo mismo que abrir php y escribir echo -->

<?php 
//Se pueden dejar comentarios usando

//Comentario 1

#Comentario 2

/* Comentario 3
Solo este tiene multiples lineas
*/

//Los comentarios no afectan el cierre de php ni el contenido despues de este ?> Hola
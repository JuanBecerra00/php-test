<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo '<h1>Variables</h1>';

    //las variables se pueden modificar

    $nombre = 'Juan';

    $nombre = 'Esteban';
    
    echo $nombre.'<br><br>';

    //Las constantes no se pueden modificar

    echo '<h1>Constantes</h1>';

    define ('nombre', 'Juanes');

    define ('nombre', 'Pepa');

    echo nombre.'<br>';

    //tambien se puede usar const para definir constantes

    const constante = 'Valor1';

    //Se puede usar la funcion defined para saber si una constante ya fue definida

    echo defined('nombre').'<br>';
    echo defined('apellido').'<br>';

    
    //En estructuras de control no se pueden definir constantes

    if(true){
        //const cantidad = 2;
        define('Precio', 2500);
    };

    //Nombres de constantes dinamicos

    $valor = 'activo';
    define ('status_'. $valor, $valor );
    echo status_activo.'<br>';

    //Existen constantes predefinidas
    
    echo PHP_VERSION.'<br>';

    //Existen constantes "Magicas" que cambian su valor dependiendo de donde se encuentren
    echo __LINE__.'<br>';

    //Variables que varian
    $var_a = 'var_b';
    $$var_a = 'var_c'; //es igual que $varb = 'var_c'

    echo $$var_a;
    ?>
</body>
</html>
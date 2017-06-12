<?php 
    /* Obtengo un array frutas que yo quiera y las muestro en pantalla utilizando el foreach */
    $frutas=array(
        '1' => 'azul',
        '2' => 'rojo',
        '3' => 'amarrillo',
        '4' => 'verda',
        '5' => 'blanco'
    ) ;
    foreach ($frutas as $valor){
        echo 'Tengo el color '.strtoupper($valor). '<br>';
    }

?>